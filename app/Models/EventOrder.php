<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventOrder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='event_order';

    protected $fillable = [
        'order_id',
        'event_id'
    ];
}
