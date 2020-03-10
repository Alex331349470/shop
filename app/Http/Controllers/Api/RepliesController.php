<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\ReplyRequest;
use App\Http\Resources\ReplyResource;
use App\Models\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function store(ReplyRequest $request)
    {
        $reply = Reply::create([
            'good_id' => $request->good_id,
            'user_id' => $request->user()->id,
            'content' => $request->replyContent,
        ]);

        return new ReplyResource($reply);
    }

    public function index(Request $request)
    {
        $replies = $request->user()->replies;

        return new ReplyResource($replies);
    }

}
