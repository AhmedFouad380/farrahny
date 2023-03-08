<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Region extends Model
{
    use HasFactory;

    protected $guarded = [''];

    protected $appends = ['title'];

    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }
    public function scopeActive($q)
    {
        $q->where('is_active', 'active');
    }
}
