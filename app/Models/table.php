<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class table extends item
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='tables';

    protected $fillable = [
        'event_id',
        'numberOfChairs',
        'numberOfTables',
        'clothColor', 'chairColor',
        'tableShape'
    ];

    // protected $guarded = ['event_id']; 

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }
}
