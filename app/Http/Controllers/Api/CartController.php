<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\AddCartRequest;
use App\Http\Resources\CartItemResource;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cartItems = $request->user()->cartItems()->with('user','good')->paginate(5);
        return new CartItemResource($cartItems);
    }
    public function add(AddCartRequest $request)
    {
        $user = $request->user();
        $goodId = $request->good_id;
        $amount = $request->amount;

        if ($cart = $user->cartItems()->where('good_id',$goodId)->first()) {
            $cart->update([
                'amount' => $amount,
            ]);
        }else {
            $cart = new CartItem(['amount' => $amount]);
            $cart->user()->associate($user);
            $cart->good()->associate($goodId);
            $cart->save();
        }

        return response(null,201);
    }

    public function destroy(Request $request)
    {

        return response(null,204);
    }
}
