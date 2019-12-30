<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    public function classrooms()
    {
        return $this->hasMany('App\Classroom');
    }
}
