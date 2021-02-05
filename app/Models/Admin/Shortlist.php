<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    public function jobs()
    {
        return $this->belongsTo('App\Models\Home\Job', 'job_id');
    }
}
