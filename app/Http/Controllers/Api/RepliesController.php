<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\ReplyRequest;
use App\Http\Resources\ReplyResource;
use App\Models\Reply;
use App\Models\ReplyImage;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function store(ReplyRequest $request)
    {
        $images = [];
        $ids = explode(',', $request->images);
        foreach ($ids as $id) {
            $image = ReplyImage::whereId($id)->first();
            array_push($images, $image->path);
        }
        $reply = Reply::create([
            'good_id' => $request->good_id,
            'user_id' => $request->user()->id,
            'order_id' => $request->order_id,
            'images' => json_encode($images),
            'content' => $request->replyContent,
        ]);

        dd($reply->images);

        return new ReplyResource($reply);
    }

    public function index(Request $request)
    {
        $replies = $request->user()->replies;

        return new ReplyResource($replies);
    }

}
