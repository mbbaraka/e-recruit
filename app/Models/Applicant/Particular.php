<?php

namespace App\Models\Applicant;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
