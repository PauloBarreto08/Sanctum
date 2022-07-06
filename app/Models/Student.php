<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    public function classroom(){

        return $this->belongsTo('App\Models\Classroom');


    }
    protected $guarded = [];
}
