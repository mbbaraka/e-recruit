<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;
use App\Models\Home\Job;

class Application extends Model
{
    public function jobs()
    {
        return $this->belongsTo('App\Models\Home\Job', 'job_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
