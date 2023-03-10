<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['title', 'description', 'is_favorite'];


    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }
    public function getRateAttribute($rate)
    {
        if($rate== 0){
            return 4;
        }else{
            return $rate;
        }
    }

    public function getIsFavoriteAttribute()
    {
        if (Auth::guard('web')->check() && Favorite::where('user_id', Auth::guard('web')->id())->where('service_id', $this->id)->count() > 0) {
            return 1;
        } elseif(Auth::guard('api')->check() && Favorite::where('user_id', Auth::guard('api')->id())->where('service_id', $this->id)->count() > 0){

        }else {
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

    public function getVideoFileAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Service_videos') . '/' . $image;
        }
        return "";
    }


    public function setVideoFileAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Service_videos');
            $this->attributes['video_file'] = $imageFields;
        }
    }

    public function Event()
    {
        return $this->belongsTo(Event::class, 'event_id')->withDefault([
            'id' => 0,
            'name' => 'Halls',
        ]);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'id' => 0,
            'name' => '',
        ]);
    }

    public function Provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id')->withDefault([
            'id' => 0,
            'name' => '',
        ]);
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class, 'service_id');
    }

    public function Reviews()
    {
        return $this->hasMany(ServiceRate::class, 'service_id');
    }


}
