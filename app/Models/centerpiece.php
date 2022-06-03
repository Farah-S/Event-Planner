<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centerpiece extends item
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='centerpieces';

    protected $fillable = [
        'event_id',
        'flowersColor',
        'vaseShape'
    ];

    // protected $guarded = ['event_id'];

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }
}
