<?php

namespace App\Http\Controllers;

use App\Clss;
use Illuminate\Http\Request;

class ClssController extends Controller
{
    public function index()
    {
        $clsses = Clss::all();

        foreach($clsses as $clss){
            echo $clss->name .': ';
            foreach($clss->clsssubjects as $clsssubject){
                echo $clsssubject->subject->name .", ";
            }

            foreach ($clss->clssexams as $clssexam) {
                echo $clssexam->exam->name . ", ";
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

    
    public function show(Clss $clss)
    {
        //
    }

    
    public function edit(Clss $clss)
    {
        //
    }

    
    public function update(Request $request, Clss $clss)
    {
        //
    }

    
    public function destroy(Clss $clss)
    {
        //
    }
}
