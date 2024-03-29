<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public static function index()
    {
        $users = new User;

        return view('user', ['users' => $users->get()]);
    }
}
