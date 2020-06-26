<?php

namespace App\Http\Controllers;
use Auth;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {   if (Auth::guard('student')->check()) {
            return view('vehicles.create_motor', ['student_level' => request('student_level')]);
        } if (Auth::guard('staff')->check()){
            return view('vehicles.create', ['dept_company' => request('staff_dept')]);
        }else{
            return view('vehicles.create', ['dept_company' => request('dept_company')]);
        }
    }

    public function store (Request $request) {
        
            $motorcycle = Motorcycle::create(request()->all());
                if (Auth::guard('student')->check()) {
                    $motorcycle->student_id =  Auth::guard('student')->id();
                } elseif (Auth::guard('staff')->check()){
                    $motorcycle->staff_id =  Auth::guard('staff')->id();
                } else {
                    $motorcycle->contractor_id =  Auth::guard('contractor')->id();
                }
                $motorcycle->save();
                return view('vehicles.show_motorcycle', ['motorcycle'=> $motorcycle])->with('success', 'Vehicle Created Successfully');
        
        
    }
}
