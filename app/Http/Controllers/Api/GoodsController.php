<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\GoodResource;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function show(Good $good)
    {
        return new GoodResource($good->with('images')->first());
    }
}
