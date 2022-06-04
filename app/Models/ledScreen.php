<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ledScreen extends item
{
    use HasFactory;
    use SoftDeletes;

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
