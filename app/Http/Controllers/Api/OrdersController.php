<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Good;
use App\Models\UserAddress;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function store(OrderRequest $request)
    {
        $user = $request->user();
        $good_ids = explode(',',$request->good_ids);
        $order = DB::transaction(function () use ($user, $request, $good_ids) {
            $address = UserAddress::find($request->input('address_id'));
            // 更新此地址的最后使用时间
            $address->update(['last_used_at' => Carbon::now()]);
            // 创建一个订单
            $order = new Order([
                'address' => [ // 将地址信息放入订单中
                    'address' => $address->full_address,
                    'zip' => $address->zip,
                    'contact_name' => $address->contact_name,
                    'contact_phone' => $address->contact_phone,
                ],
                'remark' => $request->input('remark'),
                'total_amount' => 0,
            ]);
            // 订单关联到当前用户
            $order->user()->associate($user);
            // 写入数据库
            $order->save();

            $totalAmount = 0;
            $items = $request->input('items');
            // 遍历用户提交的 good
            foreach ($good_ids as $good_id) {
                if (!$good = Good::find($good_id)) {
                    abort(403,'不存在ID为'.$good_id.'的商品');
                }

                if (!$good->on_sale) {
                    abort(403,$good->title.'未上架');
                }

                if ($good->stock === 0) {
                    abort(403,$good->tile.'库存为零');
                }
                // 创建一个 OrderItem 并直接与当前订单关联
                $item = $order->items()->make([
                    'amount' => $amount = $user->cartItems()->where('good_id',$good_id)->first()->amount,
                    'price' => $good->price,
                ]);
                $item->good()->associate($good);
                $item->save();
                $totalAmount += $good->price * $amount;
            }

            // 更新订单总金额
            $order->update(['total_amount' => $totalAmount]);

            // 将下单的商品从购物车中移除
            $user->cartItems()->whereIn('good_id', $good_ids)->delete();

            return $order;
        });

        return new OrderResource($order);
    }
}
