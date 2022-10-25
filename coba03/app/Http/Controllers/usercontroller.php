<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        $name = 'tyas';
        $users = array(
            "name" => "tyas adi",
            "phone"=> "01382648"
        );
        return view('user', compact('name', 'users'));
    }
}
