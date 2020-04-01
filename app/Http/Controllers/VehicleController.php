<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
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
        $this->middleware('auth:student');
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
        $vehicle = Vehicle::create([
            'plate_no' => request('plate_no'),
            'veh_type' => request('veh_type'),
            'veh_color' => request('veh_color'),
            'upload_docs' => request('upload_docs'),
            'student_id'  => Auth::guard('student')->id(),
        ]);
            dd($vehicle);
        return redirect()->back();

    }
}
