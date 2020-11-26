<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		// $students = DB::table( 'students' )->get();
		$data['students'] = Student::get();
		$data['pageTitle'] = 'Student List';
		return view('student.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data['pageTitle'] = 'Student Create';
		return view('student.create', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'mobile' => 'required|min:11',
			'address' => 'required',
		]);

		$student = new Student();
		$student->name = $request->name;
		$student->email = $request->email;
		$student->mobile = $request->mobile;
		$student->address = $request->address;
		$student->save();
		// Session::flash('success', 'Student information save successfully');
		//notify()->success("Student information save successfully");
		emotify('success', 'You are awesome, your data was successfully created');
		return redirect()->route('students.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//return   DB::table( 'students' )->where('id',$id)->get();
		$data['student'] = Student::findOrFail($id);
		$data['pageTitle'] = 'Student Edit';
		return view('student.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'mobile' => 'required|min:11',
			'address' => 'required',
		]);

		$student = Student::findOrFail($id);
		$student->name = $request->name;
		$student->email = $request->email;
		$student->mobile = $request->mobile;
		$student->address = $request->address;
		$student->save();
		// Session::flash('success', 'Student information update successfully');
		emotify('success', 'You are awesome, your data was successfully Updated');
		return redirect()->route('students.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {

		$student = Student::findOrFail($id);
		$student->delete();

		notify()->success('Student info delete successfully');

		redirect()->route('students.index');
	}
}
