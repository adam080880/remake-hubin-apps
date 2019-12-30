<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ApplicationLetter extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function student()
    {
        return $this->hasOne('App\Student', 'nisn', 'nisn');
    }

    public function coverLetters()
    {
        return $this->hasMany('App\CoverLetter', 'application_id', 'id');
    }
}
