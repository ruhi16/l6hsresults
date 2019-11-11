<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clssexamsubjectdiv extends Model
{
    protected $guarded = ['id'];

    public function clssexams(){
        return $this->hasMany('App\Clssexam');
    }

    public function clsssubjects(){
        return $this->hasMany('App\Clsssubject');
    }

    public function subjectdivs(){
        return $this->hasMany('App\Subjectdiv');
    }


}
