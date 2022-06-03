<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Owner extends User
{
    use HasFactory;
    use Notifiable;

    protected $table='users';
    protected $guard = 'owner';

    protected $fillable = [
        'first_name','email','password','last_name','image_id','user_type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
