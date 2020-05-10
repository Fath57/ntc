<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CourseProgress extends Model
{
    protected $table = "course_user";
    protected $fillable = ['end_date','begin_date','course_id','user_id'];
    public $timestamps = false;


}
