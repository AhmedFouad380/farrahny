<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','fb_id','google_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/users') . '/' . $image;
        }
        return asset('defaults/user_default.png');

    }


    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'users');
            $this->attributes['image'] = $imageFields;
        }
    }
}
