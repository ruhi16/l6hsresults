<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentdb extends Model
{
    protected $guarded = ['id'];

    public function session(){
        return $this->belongsTo('App\session');
    }

    public function clss(){
        return $this->belongsTo('App\Clss');
    }

    public function studentdbsubjects(){
        return $this->hasMany('App\Studentdbsubject');
    }


    public function studentcrs(){
        return $this->hasMany('App\Studentcr');
    }

}
