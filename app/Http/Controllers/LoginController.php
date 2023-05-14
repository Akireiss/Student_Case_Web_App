<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // 0:User, 1:Admin, 2:Adviser
    public function index(){
        $role=Auth::user()->role;
        if($role == 1){
           return view('admin.dashboard.dashboard');
        }else if($role == 2)
        {
           return view('staff.students.dashboard');
        }
        else if($role == 0)
        {
           return view('dashboard');
        };



    }
    }
