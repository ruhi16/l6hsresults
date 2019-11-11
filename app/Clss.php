<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clss extends Model
{
    protected $guarded = ['id'];

    public function session(){
        return $this->belongsTo('App\session');
    }

    public function clsssubjects(){
        return $this->hasMany('App\Clsssubject');
    }

    public function clssexams(){
        return $this->hasMany('App\Clssexam');
    }




    

    public function studentdbs(){
        return $this->hasMany('App\Studentdb');
    }
    public function studentcrs(){
        return $this->hasMany('App\Studentcr');
    }
}
