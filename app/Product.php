<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];

    public function tags()
    {
        return $this->hasManyThrough(Tag::class,ProductTag::class,'product_id','tag_id');
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class,'product_id');
    }

    public function attrByLocale($locale = 'en',$attr = 'name')
    {
        $arr = json_decode($this->getRawOriginal($attr),true);
        return $arr[$locale];
    }

    public function getNameAttribute($value)
    {
        $arr = json_decode($value,true);


        if(app()->isLocale('ar'))
            return $arr['ar'];
        else
            return $arr['en'];
    }



    public function getDescriptionAttribute($value)
    {
        $arr = json_decode($value,true);

        if(app()->isLocale('ar'))
            return $arr['ar'];
        else
            return $arr['en'];
    }


    public function getPriceAttribute($value)
    {
        return money_format("$%i",$value);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
