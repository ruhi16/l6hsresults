<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clsssubject extends Model
{
    protected $guarded = ['id'];

    public function clss(){
        return $this->belongsTo('App\Clss');
    }

    public function subject(){
        return $this->belongsTo('App\Subject');
    }








    public function clssexamsubjectdiv(){
        return $this->belongsTo('App\clssexamsubjectdiv');
    }
}
