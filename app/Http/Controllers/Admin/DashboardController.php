<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class DashboardController extends Controller
{
    //
    public function registeredUsers(){
        $users = User::get();
        return view('admin.register-role')->with('usuarios', $users); 
    }
}
