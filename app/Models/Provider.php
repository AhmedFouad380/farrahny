<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class Provider extends Authenticatable
{
    use HasFactory;

    protected $appends = ['name'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getNameAttribute()
    {
        if (App::currentLocale() == "ar") {
            return $this->ar_name;
        } else {
            return $this->en_name;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Provider') . '/' . $image;
        }
        return "";
    }


    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Provider');
            $this->attributes['image'] = $imageFields;
        }
    }

    public function getCoverAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Provider') . '/' . $image;
        }
        return "";
    }


    public function setCoverAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Provider');
            $this->attributes['cover'] = $imageFields;
        }
    }

    public function Services()
    {
        return $this->HasMany(Service::class, 'provider_id');
    }
}
