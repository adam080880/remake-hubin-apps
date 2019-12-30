<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    public function classrooms()
    {
        return $this->hasMany('App\Classroom');
    }
}
