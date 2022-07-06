<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom as Classroom;
use App\Http\Resources\Classroom as ClassroomResource;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = classroom::all();
        return $classrooms;
    }

    public function show($id)
    {
        $classrooms = Classroom::find( $id );
        return $classrooms;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $classroom = new Classroom;
      $classroom->turma = $request->input('turma');
      $classroom->horario = $request->input('horario');
      $classroom->sala = $request->input('sala');
      $classroom->save();
      return $request;
        // if($classroom->fails()){
        //     return new ClassroomResource( $classroom );       
        // }
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
          $Classroom = Classroom::find($id);
          $Classroom->turma = $request->input('turma');
          $Classroom->horario = $request->input('horario');
          $Classroom->sala = $request->input('sala');
          $Classroom->update();
        
    
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
    public function destroy($id){
      Classroom::where( 'id', $id )->delete();
        return response()-> json([
          "message" => "chopelada"
        ])
        ;
      }
    }