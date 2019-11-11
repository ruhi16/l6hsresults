<?php

namespace App\Http\Controllers;

use App\Studentdb;
use Illuminate\Http\Request;

class StudentdbController extends Controller
{    
    public function index()
    {
        $studentdbs = Studentdb::all();
        foreach($studentdbs as $studentdb){
            echo $studentdb->id." - ". $studentdb->name;
            foreach($studentdb->studentdbsubjects as $studentdbsubject){
                echo "- ".$studentdbsubject->subject->sname . ", ";
            }

            echo "<br/>";
        }
    }

 
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

 
    public function show(Studentdb $studentdb)
    {
        //
    }

 
    public function edit(Studentdb $studentdb)
    {
        //
    }

   
    public function update(Request $request, Studentdb $studentdb)
    {
        //
    }

  
    public function destroy(Studentdb $studentdb)
    {
        //
    }
}
