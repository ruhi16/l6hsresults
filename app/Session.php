<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = ['id'];

    public function clsses()
    {
        return $this->hasMany('App\Clss');
    }

    public function exams()
    {
        return $this->hasMany('App\Exam');
    }

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }




    public function studentdbs()
    {
        return $this->hasMany('App\Studentdb');
    }

    public function studentcrs()
    {
        return $this->hasMany('App\Studentcr');
    }
}
