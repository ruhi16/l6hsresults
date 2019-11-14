<?php

namespace App\Http\Controllers;

use App\Studentcr;
use App\Subject;
use App\Studentdbsubject;
use Illuminate\Http\Request;

class StudentcrController extends Controller
{
    
    public function index()
    {
        // $studentcrs = Studentcr::all();
        
        // foreach($studentcrs as $studentcr){
        //     echo $studentcr->id.' - '.$studentcr->studentdb->name;
        //     echo $studentcr->studentdbsubjects;


            
        //     echo "<br/>";
        // }

       
        // $studentdbsubjects = Studentdbsubject::where('subject_id', 1)->get();
        $subject = Subject::find(9);//where('id', 1)->get();

        foreach($subject->studentdbsubjects as $abcd){
            echo $abcd ;
            echo "=> ".$abcd->studentcr;

            echo "<br/>";
        }



        // foreach($subject->studentdbsubjects as $sub){
        //     echo $sub;
        // }
        // dd($studentdbsubjects);
        // foreach($studentdbsubjects->studentcr as $studentdbsubject){
        //     echo $studentdbsubject;

        //     echo "<br/>";
        // }
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Studentcr $studentcr)
    {
        //
    }

    
    public function edit(Studentcr $studentcr)
    {
        //
    }

    
    public function update(Request $request, Studentcr $studentcr)
    {
        //
    }

    
    public function destroy(Studentcr $studentcr)
    {
        //
    }
}
