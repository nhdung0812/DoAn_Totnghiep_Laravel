<?php

namespace App\Http\Controllers;

use App\Notifications\TestNotification;
use App\User;
use Illuminate\Http\Request;

class SendNotification extends Controller
{
    //
    public function create()
    {
        return view('notification');
    }

    public function store(Request $request)
    {
        
    }
}
