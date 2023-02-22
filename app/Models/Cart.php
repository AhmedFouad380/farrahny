<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [''];

//    protected $casts = ['time'=>'timestraen:g:i a'];
    public function Service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
