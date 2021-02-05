<?php

namespace App\Models\Home;

use App\Models\Home\Category;
use Illuminate\Database\Eloquent\Model;
use App\Models\Home\Application;

class Job extends Model
{
    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_job')->withTimestamps();
    }

    public function applications()
    {
        return $this->hasMany('App\Models\Home\Application', 'job_id');
    }
    public function shortlist()
    {
        return $this->hasMany('App\Models\Admin\Shortlist', 'job_id');
    }
}
