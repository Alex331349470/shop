<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodImage extends Model
{
    protected $fillable = ['description','good_id','image'];

    public function good()
    {
        return $this->belongsTo(Good::class);
    }
}
