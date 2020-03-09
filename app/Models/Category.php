<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
