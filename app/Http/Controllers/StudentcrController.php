<?php

namespace App\Http\Controllers;

use App\Studentcr;
use Illuminate\Http\Request;

class StudentcrController extends Controller
{
    
    public function index()
    {
        $studentcrs = Studentcr::all();
        
        foreach($studentcrs as $studentcr){
            echo $studentcr->id;
            
            
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
