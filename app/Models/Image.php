<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'path'
    ];

    public function customEvent()
    {
        return $this->belongsToMany(customEvent::class);
    }

    public function package()
    {
        return $this->belongsToMany(package::class);
    }
}
