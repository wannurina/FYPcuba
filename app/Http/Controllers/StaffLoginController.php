<?php

namespace App\Http\Controllers;
use Auth;
use App\Staff;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:staff');
    }

    // public function register_form () {
    // 	return view('auth.student-register');
    // }

    public function login_form() {
    	return view('auth.staff-login');
    } 
    
    // public function register () {
      
    //     $validated = request()->validate([
    //         'MatricNo' => 'required',
    //         'Name' => 'required', 
    //         'email' => 'required', 
    //         'password'=> 'required'
    //     ]);
    //     $validated['password'] = Hash::make(request('Password'));
    //     Student::create(Arr::except($validated, '_token'));

    //     return redirect(route('student.form'))->with('status', 'Account created Successfully');

    // }

    public function login (Request $request) {
    	request()->validate([
            // 'email' => 'required|email',
            'StaffNo' => 'required',
            'password' => 'required|min:4'
    	]);
    	
        $credentials = request()->only('StaffNo','password');
        // $credentials = request()->only('email', 'password');

        if(Auth::guard('staff')->attempt($credentials)){            
            return redirect()->intended(route('staff.form'));
        } 
        else
            return redirect()->back()->withInput(request()->only('StaffNo'))->with('error', 'Unmatched Credentials');
    }
    
}
