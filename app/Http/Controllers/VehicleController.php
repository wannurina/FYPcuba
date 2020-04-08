<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Staff;
use App\Contractor;
use App\Vehicle;


class VehicleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // dd(Auth::guard('contractor')->check());

        // if (Auth::guard('student')->check()) {
        //     $this->middleware('auth:student');
        // } elseif (Auth::guard('staff')->check()){
        //     $this->middleware('auth:staff');
        // } else {
        //     $this->middleware('auth:contractor');
        // }

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('vehicles.create');
    }

    public function store () {
        // dd(request()->all()); //to see what you just input
        $path = request('upload_docs')->store('uploads');
        
        $vehicle = new Vehicle; //instentiate   
        $vehicle->type = request('type');
        $vehicle->plate_no = request('plate_no');
        $vehicle->model = request('model');
        $vehicle->color = request('color');
        $vehicle->upload_docs = basename($path);
        if (Auth::guard('student')->check()) {
            $vehicle->student_id =  Auth::guard('student')->id();
        } elseif (Auth::guard('staff')->check()){
            $vehicle->staff_id =  Auth::guard('staff')->id();
        } else {
            $vehicle->contractor_id =  Auth::guard('contractor')->id();
        }
        $vehicle->save();


        
        


        // $vehicle = Vehicle::create(request()->all()); // mass assignment 
        // return redirect()->back();
        return view('vehicles.show', ['vehicle'=> $vehicle])->with('success', 'Vehicle Created Successfully');
    }
}
