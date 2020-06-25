<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    //
    /**
     * Class constructor.
     */
    public function __construct(String $name, String $abilities, String $stats)
    {
        $this->name = $name;
        $this->abilities = $abilities;
        $this->stats = $stats;
    }
}
