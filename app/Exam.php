<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = ['id'];

    public function session()
    {
        return $this->belongsTo('App\session');
    }

    public function clssexams(){
        return $this->hasMany('App\Clssexam');
    }
}
