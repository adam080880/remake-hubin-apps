<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public function major()
    {
        return $this->belongsTo('App\Major');
    }

    public function generation()
    {
        return $this->belongsTo('App\Generation');
    }

    public function periode()
    {
        return $this->belongsTo('App\Periode');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
