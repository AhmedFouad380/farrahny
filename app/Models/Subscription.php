<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Subscription extends Model
{
    use HasFactory;


    protected $appends = ['name'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getNameAttribute()
    {
        if (App::currentLocale() == "ar") {
            return $this->name_ar;
        } else {
            return $this->name_en;
        }
    }

    public function scopeActive($q)
    {
        $q->where('is_active', 'active');
    }

}
