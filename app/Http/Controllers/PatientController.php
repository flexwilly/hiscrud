<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //show the data being submitted
        //return dd($request->input());
        $request->validate([
            'telephone'=> 'required',
            'patient_name'=> 'required',
            'patient_dob'=> 'required',
            'patient_idno'=> 'required',
            'patient_address'=> 'required',
            'patient_county'=> 'required',
            'sub_county'=> 'required',
            'patient_email'=> 'required',
            'patient_gender'=> 'required',
            'patient_marital_status'=> 'required',
            'kin_name'=> 'required',
            'kin_idno'=> 'required',
            'kin_dob'=> 'required',
            'kin_gender'=> 'required',
            'kin_relationship'=> 'required',
            'kin_telephone'=> 'required'
        ]);
     
        Patient::create($request->post());
        return redirect()->route('patient.create')->with('message','Record created successfuly');
      

    }

    
}
