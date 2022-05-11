<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ledScreen extends item
{
    use HasFactory;
    protected $table='led_screens';
    protected $fillable = [
        'event_id',
        'size',
        'numberOfScreens'
    ];

    // protected $guarded = ['event_id'];    

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }
}
