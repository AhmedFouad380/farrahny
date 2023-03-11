<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Provider extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $appends = ['name','rate'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getNameAttribute()
    {
        if (App::currentLocale() == "ar") {
            return $this->ar_name;
        } else {
            return $this->en_name;
        }
    }
    public function getRateAttribute()
    {
            return 5;
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

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subscription_id');
    }

    public function current_subscription()
    {
        return $this->belongsTo(ProviderSubscription::class, 'current_provider_subscription_id');
    }

    public function Event()
    {
        return $this->belongsTo(Event::class, 'event_id')->withDefault([
            'id' => 0,
            'title' => 'Halls',
        ]);
    }

    public function scopeActive($q)
    {
        $q->where('is_active', 'active');
    }
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
