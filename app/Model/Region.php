<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public  function  Country(){
        return $this->hasMany(Country::class);
    }
}