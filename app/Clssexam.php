<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clssexam extends Model
{
    protected $guarded = ['id'];
    
    public function clss(){
        return $this->belongsTo('App\Clss');
    }

    public function exam(){
        return $this->belongsTo('App\Exam');
    }






    public function clssexamsubjectdiv(){
        return $this->belongsTo('App\clssexamsubjectdiv');
    }
}
