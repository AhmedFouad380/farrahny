<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Service extends Model
{
    use HasFactory;

    protected $appends = ['title','description','is_favorite'];
    public function getTitleAttribute()
{
    if ($locale = App::currentLocale() == "ar") {
        return $this->ar_title;
    } else {
        return $this->en_title;
    }
}
    public function getIsFavoriteAttribute()
    {
        if (Auth::guard('web')->check() && Favorite::where('user_id',Auth::guard('web')->id())->where('service_id',$this->id)->count() >0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getDescriptionAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_description;
        } else {
            return $this->en_description;
        }
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Service') . '/' . $image;
        }
        return "";
    }


    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Service');
            $this->attributes['image'] = $imageFields;
        }
    }

    public function Event(){
        return  $this->belongsTo(Event::class ,'event_id');
    }

    public function Category(){
        return  $this->belongsTo(Category::class ,'category_id');
    }
    public function Provider(){
        return  $this->belongsTo(Provider::class ,'provider_id');
    }
    public function images(){
        return  $this->hasMany(ServiceImage::class ,'service_id');
    }


}
