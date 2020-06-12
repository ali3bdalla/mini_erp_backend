<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function products()
    {
        return $this->hasManyThrough(Product::class,ProductTag::class,'tag_id','product_id');
    }
}
