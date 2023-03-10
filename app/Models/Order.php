<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function OrderDetails(){
        return $this->HasMany(OrderDetail::class,'order_id');
    }
}
