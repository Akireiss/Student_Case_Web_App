<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if($role == 1){
           return view('admin.dashboard.dashboard');
        }else if($role == 0)
        {
           return view('staff.students.dashboard');
        }
        else if($role == 2)
        {
           return view('dashboard');
        };



    }
    }
