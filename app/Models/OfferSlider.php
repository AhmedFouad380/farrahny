<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class OfferSlider extends Model
{
    use HasFactory;

    protected $appends = ['button','description'];

    public function getDescriptionAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_description;
        } else {
            return $this->en_description;
        }
    }
    public function getButtonAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_button;
        } else {
            return $this->en_button;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/OfferSlider') . '/' . $image;
        }
        return "";
    }


    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'OfferSlider');
            $this->attributes['image'] = $imageFields;
        }
    }
}
