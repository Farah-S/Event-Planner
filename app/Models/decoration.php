<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class decoration extends item
{
    use HasFactory;
    use SoftDeletes;

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
