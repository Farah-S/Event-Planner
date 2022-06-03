<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customEvent extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'details',
        'budget',
        'indoors'
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
