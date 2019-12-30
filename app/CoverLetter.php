<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    public function applicationLetter()
    {
        return $this->belongsTo('App\ApplicationLetter', 'application_id', 'id');
    }
}
