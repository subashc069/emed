<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $table = 'orders';

    protected $guarded = [];

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'order_id');
    }

    public function scopePending($query)
    {
        return $query->whereStatus(1);
    }

    public function scopeDispatched($query)
    {
        return $query->whereStatus(3);
    }

    public function scopeDelivered($query)
    {
        return $query->whereStatus(4);
    }

    public function scopeConfirmed($query)
    {
        return $query->whereStatus(2);
    }

}
