<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public $name;
    public $abilities;
    public $stats;

    protected $fillable = ['name', 'abilities', 'stats'];
}
