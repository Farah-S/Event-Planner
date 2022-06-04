<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageOrder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='order_package';
        
    protected $fillable = [
        'order_id',
        'package_id'
    ];
}
