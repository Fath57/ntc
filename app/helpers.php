<?php

use App\Models\Course;
use App\Models\CourseProgress;
use App\Models\Progress;

if (!function_exists('getFinishedCourses')){
   function getFinishedCourses($user_id){
        return Progress::where('user_id',$user_id)->where('state',Progress::FINISHED)->get();
    }
}

if (!function_exists('getCurrentCourses')){
   function getCurrentCourses($user_id){
        return Progress::where('user_id',$user_id)->where('state',Progress::PROGRESSING)->get();
    }
}

if (!function_exists('getOtherCourses')){
   function getOtherCourses($user_id){
        return \App\Models\Module::whereNotIn('id',getCurrentCourses($user_id)->pluck('module_id')->toArray())->whereNotIn('id',getFinishedCourses($user_id)->pluck('module_id')->toArray())->get();
    }
}
if (!function_exists('getCategoryById')){
   function getCategoryById($id){
        return \App\Models\CourseCategory::find($id);
    }
}
