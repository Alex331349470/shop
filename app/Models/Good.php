<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable = [
        'title','description','art','time','size','quality','type','style','discount','content','price','rating','stock','sold_count','review_count'];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    // 与商品SKU关联
    public function images()
    {
        return $this->hasMany(GoodImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
