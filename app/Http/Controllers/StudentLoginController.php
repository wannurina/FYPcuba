<?php

namespace App\Http\Controllers;
use Auth;
use App\Student;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:student');
    }

    public function login_form() {

    	return view('auth.student-login');
    } 

    public function login (Request $request) {
    	request()->validate([
        
            'MatricNo' => 'required',
            'password' => 'required|min:4'
    	]);
    
        $credentials = request()->only('MatricNo','password');

        if(Auth::guard('student')->attempt($credentials)){           
            return redirect()->intended(route('students.create', request('MatricNo') ));
        } 
        else
            return redirect()->back()->withInput(request()->only('MatricNo'))->with('error', 'Unmatched Credentials');
    }
    
}
