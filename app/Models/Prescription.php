<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getImageAttribute($image)
    {
        return $image ? asset('public/upload/prescriptions/' . $image) : '';
    }
}
