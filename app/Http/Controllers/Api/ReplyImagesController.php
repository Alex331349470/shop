<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ImageUploadHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ReplyImageRequest;
use App\Http\Resources\ImageResource;
use App\Http\Resources\ReplyImageResource;
use App\Models\ReplyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReplyImagesController extends Controller
{
    public function store(ReplyImageRequest $request, ImageUploadHandler $handler, ReplyImage $replyImage)
    {
        $user = $request->user();

        $result = $handler->save($request->image, 'reply', $user->id, 416);

        $replyImage->path = $result['path'];
        $replyImage->user_id = $user->id;
        $replyImage->good_id = $request->good_id;
        $replyImage->order_id = $request->order_id;
        $replyImage->save();

        return new ReplyImageResource($replyImage);
    }
}
