<?php

namespace App\ORS;


use App\Models\Admin\Notification;
use App\User;
use Illuminate\Support\Facades\Facade;
use Auth;

class Ors extends Facade
{
     //Achivement for descriptions
    public static function notification()
    {
        $notification = Notification::where('receiver_id', Auth::user()->id)->where('status', '0')->get()->count();

        return $notification;
    }
}
