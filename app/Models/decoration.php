<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class decoration extends item
{
    use HasFactory;
    protected $table='decorations';
    protected $fillable = [
        'event_id',
        'budget',
        'details'
    ];

    // protected $guarded = ['event_id'];
    
    public function event()
    {
        return $this->belongsToMany(Event::class);
    }
}
