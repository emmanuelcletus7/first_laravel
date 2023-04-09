<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class studentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
return view('students');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
      return view('students');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 $request->validate(["firstname"=> "required",
 "lastname"=> "required",
  'gender'=> "required",
        'age'=> "required",
        'class' =>"required",
        'school'=> "required",
        'state' => "required",
        'height'=> "required",]);
 Students::create([
    "firstname" => $request->firstname,
     "lastname" => $request->lastname,
    "gender" => $request->gender,
    "age" => $request->age,
    "class" => $request->class,
    "school" => $request->school,
    "state" => $request->state,
    "height" => $request->height,
 ]);

 return redirect('students')->with("msg", "student's created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
