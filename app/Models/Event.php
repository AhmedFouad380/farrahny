<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Event extends Model
{
    use HasFactory;


    protected $appends = ['title'];
    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Event') . '/' . $image;
        }
        return "";
    }


    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Event');
            $this->attributes['image'] = $imageFields;
        }
    }

    public function getCoverAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Event') . '/' . $image;
        }
        return "";
    }


    public function setCoverAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Event');
            $this->attributes['cover'] = $imageFields;
        }
    }

    public function Category(){
        return $this->hasMany(Category::class,'event_id');
    }
}
