<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ImageUploadHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ReplyImageRequest;
use App\Http\Resources\ImageResource;
use App\Models\ReplyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReplyImagesController extends Controller
{
    public function store(ReplyImageRequest $request, ImageUploadHandler $handler, ReplyImage $replyImage)
    {
        $user = $request->user();

        $size = $request->type == 'avatar' ? 416 : 1024;
        $result = $handler->save($request->image, Str::plural($request->type), $user->id, $size);

        $replyImage->path = $result['path'];
        $replyImage->user_id = $user->id;
        $replyImage->save();

        return new ImageResource($replyImage);
    }
}
