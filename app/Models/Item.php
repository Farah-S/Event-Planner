<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class item extends baseEvent
{
    use HasFactory;

    protected $event;

    public function setEvent($event)
    {
        $this->event=$event;
    }

    public function getEvent(){
        return $this->event;
    }
}
