<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function show()
    {
        return view('user.my_profile');
    }

}
