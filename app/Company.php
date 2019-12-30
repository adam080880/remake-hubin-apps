<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function applicationLetters()
    {
        return $this->hasMany('App\ApplicationLetter');
    }    
}
