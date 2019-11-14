<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentdbsubject extends Model
{
    protected $guarded = ['id'];

    public function studentdb(){
        return $this->belongsTo('App\Studentdb');
    }

    public function subject(){
        return $this->belongsTo('App\Subject');
    }

    



    
    public function studentcr(){
        return $this->belongsTo('App\Studentcr','studentdb_id','id');
    }
}
