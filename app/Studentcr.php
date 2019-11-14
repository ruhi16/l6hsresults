<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentcr extends Model
{
    protected $guarded = ['id'];

    public function session(){
        return $this->belongsTo('App\session');
    }

    public function clss(){
        return $this->belongsTo('App\Clss');
    }






    public function studentdbsubjects(){
        return $this->hasMany('App\Studentdbsubject','studentdb_id','studentdb_id');
    }

    public function studentdb(){
        return $this->belongsTo('App\Studentdb');
    }

}
