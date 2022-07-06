<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Student;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return $students;
    }

    public function show($id)
    {
        $student = Student::find($id);
        return $students;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $student = new Student;
      $student->name = $request->input('name');
      $student->idade = $request->input('idade');
      $student->classroom_id = $request->input('classroom_id');
      $student->turma = $request->input('turma');
      $student->matricula = $request->input('matricula');
      $student->save();
      return $request;       
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Student = Student::find($id);
        $Student->name = $request->input('name');
        $Student->idade = $request->input('idade');
        $Student->classroom_id = $request->input('classroom_id');
        $Student->turma = $request->input('turma');
        $Student->matricula = $request->input('matricula');
        $Student->update();
        
        return response()->json([
            "message" => "foi sal"
          ]); 
    
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Student::where( 'id',$id)->delete();
        return response()->json([
            "message" => "foi sal"
        ]);
    }
  }