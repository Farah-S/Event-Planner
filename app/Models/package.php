<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class package extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'details',
        'price',
        'hidden',
        'season'
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function image()
    {
        return $this->belongsToMany(Image::class);
    }
}
