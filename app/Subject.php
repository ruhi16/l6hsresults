<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = ['id'];

    public function session(){
        return $this->belongsTo('App\session');
    }

    public function clsssubjects(){
        return $this->hasMany('App\Clsssubject');
    }

    public function studentdbsubjects(){
        return $this->hasMany('App\Studentdbsubject');
    }


    
}
