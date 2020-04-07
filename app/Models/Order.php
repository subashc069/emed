<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Order extends Model
{
    use Sluggable;

    protected  $table = 'orders';

    protected $fillable = [
        'name','address','phone'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
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
