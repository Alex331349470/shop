<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\GoodResource;
use App\Http\Resources\ReplyResource;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function show(Good $good)
    {
        return new GoodResource($good->with('images')->first());
    }

    public function replyIndex(Good $good)
    {
        ReplyResource::wrap('data');
        return new ReplyResource($good->replies);
    }
}
