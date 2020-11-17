<?php

namespace App\Models\Home;
use App\Models\Home\Job;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function job()
    {
        return $this->belongsToMany(Job::class, 'category_job')->withTimestamps();
    }
}
