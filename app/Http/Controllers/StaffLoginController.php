<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffLoginController extends Controller
{
    public function showlogin () {
        return view('staffs.login');
    }

    public function showregister () {
        return view('staffs.register');
    }

    public function login () {
        dd(request()->all());
        return 'success';
    }

    public function register () {
        Staff::create([request()]);
        return 'success';

    }


}
