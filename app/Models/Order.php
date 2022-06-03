<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer_id',
        'order_type'
    ];

    public function customEvent()
    {
        return $this->belongsToMany(customEvent::class);
    }

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }

    public function package()
    {
        return $this->belongsToMany(package::class);
    }
}
