<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    use HasFactory;

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

}
