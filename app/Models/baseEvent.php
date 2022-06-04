<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class baseEvent extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $type;

    /* public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        $this->type = $this->setType();
    } */

    public function setType($t)
    {
        $this->type=$t;
    }

    public function getType()
    {
        return $this->type;
    }
}
