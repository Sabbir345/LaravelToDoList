<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    //
    public function index(){

    	$student = student::all();

    	return view('welcome')->withStudents($student);
    }
    public function create(){
    	return view('layouts.create');
    }
    public function store(Request $request){

    	$this->validate($request,[
    		'firstname'  => 'required',
    		'lastname'   => 'required',
    		'email'      => 'required',
    		'phone'      => 'required'
    	]);
    	
    	$student = new student();

    	$student->first_name    = $request->firstname;
    	$student->last_name	    = $request->lastname;
    	$student->email 		= $request->email;
    	$student->phone 		= $request->phone;
    	$student->save();

    	return redirect(route('home'))->with('message', ' Successfully Added');
    }
    public function edit($id){

        $student = student::find($id);

        return view('layouts.edit')->withStudent($student);
    }
    public function update(Request $request, $id){

    	$this->validate($request,[
    		'firstname'  => 'required',
    		'lastname'   => 'required',
    		'email'      => 'required',
    		'phone'      => 'required'

    	]);
    	
    	$student = student::find($id);

    	$student->first_name    = $request->firstname;
    	$student->last_name	    = $request->lastname;
    	$student->email 		= $request->email;
    	$student->phone 		= $request->phone;

    	$student->save();

    	return redirect(route('home'))->with('message', ' Successfully Updated');
    
    }
    public function delete($id){

    
    	$student = student::find($id);


    	$student->delete();

        return redirect(route('home'))->with('message', ' Successfully Delete');
    }
}
