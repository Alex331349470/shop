<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplyImage extends Model
{
    protected $fillable = ['reply_id','path'];

    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }
}
