<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Course;
use App\Models\CourseProgress;
use App\Models\RapportTp;
use Illuminate\Database\Eloquent\Builder;
class Module extends Model
{

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function users(){
       return $this->belongsToMany(Progress::class);
    }

    public function questions (){
        return $this->hasMany(Question::class);
    }



    function hasFinishedModule($module_id, $user_id){
        $module = Module::with("courses")->where('id',$module_id)->first();
        //le nombre de cours du module que l'utilisateur a déjà fini
        $finishedCourses = Course::whereIn("id",CourseProgress::where('user_id',$user_id)->whereNotNull('end_date')->pluck("course_id")->toArray())
            ->where('module_id',$module_id)
            ->count();
        //le nombre total de cours de ce module
        $moduleTotalCourses = $module->courses()->count();
        return $finishedCourses==$moduleTotalCourses;
    }


    function rapportModuleSoumis($module_id, $user_id){
        $rapport =RapportTp::where('user_id',$user_id)->where('module_id',$module_id)->first();
        return ($rapport!=null)?$rapport:false;
    }

    function hasFinishedAllModule($user_id){
        $modules = Module::all()->where('onlene',1);


    }

}
