<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomEventImage extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'image_id',
        'custom_event_id'
    ];
}
