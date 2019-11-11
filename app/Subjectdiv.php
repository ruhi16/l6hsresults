<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjectdiv extends Model
{
    protected $guarded = ['id'];



    public function clssexamsubjectdiv(){
        return $this->belongsTo('App\clssexamsubjectdiv');
    }
}
