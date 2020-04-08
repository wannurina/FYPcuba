<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contractor;
use Auth;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($contractor_no)
    {
        // select * from students where matric_no = $contractor_no and find the first matched data
        return view('contractors.create', ['contractors' => Contractor::where('contractor_no', $contractor_no)->first()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   //not a mass assignment
        $contractors = Contractor::find(Auth::guard('contractors')->id());
        $contractors->address = $request->address;
        $contractors->postcode = $request->postcode;
        $contractors->city = $request->city;
        $contractors->state = $request->state;
        $contractors->phone_no = $request->phone_no;
        $contractors->email = $request->email;
        $contractors->save();
        
            
        return view('contractors.show')->with('success', 'Pofile updated successfully')
                                                ->with('contractors', $contractors);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
