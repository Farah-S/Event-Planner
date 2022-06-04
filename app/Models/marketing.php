<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class marketing extends item
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='marketings';
    protected $fillable = [
        'event_id',
        'onlineAD',
        'billboardAD',
        'budget'
    ];

    // protected $guarded = ['event_id']; 

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }
}
