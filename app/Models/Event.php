<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends baseEvent
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'events';

    protected $fillable = [
        'indoors', 'soundSetup',
        'plixie', 'lightsColor',
        'photo', 'video',
        'budget'
        //  ,'type'
    ];

    protected $casts = [
        'indoors' => 'boolean',
        'soundSetup' => 'boolean',
        'plixie' => 'boolean',
        'video' => 'boolean'
    ];

    protected $guarded = ['type', 'stageLength',
        'stageWidth'];

    /* public function __construct(array $attributes = array(),$t)
    {
        parent::__construct($attributes);

        $this->type = $t;
    } */

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function decoration()
    {
        return $this->hasOne(decoration::class);
    }

    public function ledScreen()
    {
        return $this->hasOne(ledScreen::class);
    }

    public function marketing()
    {
        return $this->hasOne(marketing::class);
    }

    public function tables()
    {
        return $this->hasOne(table::class);
    }

    public function centerpiece()
    {
        return $this->hasOne(centerpiece::class);
    }
}
