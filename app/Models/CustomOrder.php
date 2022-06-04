<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomOrder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='custom_event_order';

    protected $fillable = [
        'order_id',
        'custom_event_id'
    ];
}
