<?php

namespace App\Http\Controllers\Voyager;

use App\Models\Course;
use App\Models\CourseProgress;
use App\Models\Module;
use App\Models\Progress;
use App\Models\Result;
use App\User;
use Carbon\Carbon;
use DemeterChain\C;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use TCG\Voyager\Models\Role;

class VoyagerController extends BaseVoyagerController
{

    public function index()
    {



        switch (Auth::user()->role->name){
            case User::NTC_ADMIN :
                $totalModule = Module::all()->count();
                $totalMembre = User::all()->where("role_id",Role::where('name',User::MEMBRE)->first()->id)->count();
                $totalCertificate = Progress::all()->where('certified',1)->count();
                return view("vendor.voyager.dashboard.admin_dash",compact("totalModule","totalMembre","totalCertificate"));
                case User::MEMBRE :
                    $totalModuleFinished = Progress::all()->where("user_id",Auth::id())->where('state',Progress::FINISHED)->count();
                    $totalModuleProgress = Progress::all()->where("user_id",Auth::id())->where('state',Progress::PROGRESSING)->count();
                    $totalCertificate = Progress::all()->where("user_id",Auth::id())->where('certified',1)->count();

                    return view("vendor.voyager.dashboard.user_dash",compact("totalCertificate","totalModuleFinished","totalModuleProgress"));
            default :
            return parent::index();
                break;
        }

    }

    public function finishCourse($slug){
        $course = Course::with('module.courses')->whereHas("users",function (Builder $query){
            //$query->where('user_id',Auth::id());
        })->where("slug",$slug)->first();
        //le cours actuel
        $progress = CourseProgress::where('user_id',Auth::id())->where('course_id',$course->id)->first();
        $progress->end_date = Carbon::now();
        $progress->save();

        //le nombre de cours du module que l'utilisateur a déjà fini
        $finishedCourses = Course::whereIn("id",CourseProgress::where('user_id',Auth::id())->whereNotNull('end_date')->pluck("course_id")->toArray())
            ->where('module_id',$course->module->id)
            ->count();
        //le nombre total de cours de ce module
        $moduleTotalCourses = $course->module->courses()->count();
        //la progression de l'utilisateur dans le module
        $moduleProgress = Progress::where('user_id',Auth::id())->where('module_id',$course->module->id)->first();
        if ($moduleProgress==null){
            Progress::create([
                'user_id'=>Auth::id(),
                "module_id"=>$course->module->id,
                "state"=>($finishedCourses==$moduleTotalCourses)?Progress::FINISHED:Progress::PROGRESSING,
                "progress"=>($finishedCourses/$moduleTotalCourses)*100,
            ]);
        }else{
            $moduleProgress->progress = ($finishedCourses/$moduleTotalCourses)*100;
            $moduleProgress->state = ($finishedCourses==$moduleTotalCourses)?Progress::FINISHED:Progress::PROGRESSING;
            $moduleProgress->save();
        }
        return back();
    }

    public function exam(Request $request,$slug){
        $module = Module::with("questions")->where("slug",$slug)->first();
        $questions = $module->questions()->orderBy("numero","asc")->get();
        $progress = Progress::where('user_id',Auth::id())->where('module_id',$module->id)->first();



        if ($request->isMethod("get")){
            return view("vendor.voyager.exams.exam",compact("questions","module"));
        }else{
            foreach ($questions as $question){
                $correctAnswer = $question->reponse;
                $userAnswer = $request->input("question_".$question->id);
                $state = (strtolower($correctAnswer)==strtolower($userAnswer))?Result::SUCCESS:Result::FAILED;
                Result::create([
                    "reponse"=>$userAnswer,
                    "user_id"=>Auth::id(),
                    "question_id"=>$question->id,
                    "state"=>$state
                ]);
            }
            $userPassResults = Result::where('user_id',Auth::id())
                ->whereIn('question_id',$module->questions()->pluck('id')->toArray())
                ->where('state',Result::SUCCESS)
                ->get();
            $percentage = (count($userPassResults)/count($questions))*100;

            $progress->examinated = 1;
            $progress->exam_date= Carbon::now();
            $progress->exam_result = $percentage;
            $progress->save();

            return redirect()->to(route("modules.exam.result",$module->slug));
        }


    }

    public function result($slug){
        $module = Module::with("questions")->where("slug",$slug)->first();
        $questions = $module->questions()
            ->with('results')
            ->orderBy("numero","asc")
            ->get();
        $progress = Progress::where('user_id',Auth::id())->where('module_id',$module->id)->first();
        $userPassResults = Result::where('user_id',Auth::id())
            ->whereIn('question_id',$module->questions()->pluck('id')->toArray())
            ->where('state',Result::SUCCESS)
            ->get();
        $percentage = (count($userPassResults)/count($questions))*100;

        $results = Result::with("question")
            ->where('user_id',Auth::id())
            ->whereIn('question_id',$questions->pluck("id")->toArray())
            ->orderByDesc('created_at')
            ->get();


        return view("vendor.voyager.exams.result",compact("percentage","questions","results","userPassResults"));
    }

    public function readCourse($slug){
        $course = Course::with('users','module')->where('slug',$slug)->first();
        $progress = CourseProgress::where('user_id',Auth::id())->where('course_id',$course->id)->first();
        if ($progress==null){
            CourseProgress::create([
                'user_id'=>Auth::id(),
                'course_id'=>$course->id,
                'begin_date'=>Carbon::now()
            ]);
        }
       return view("vendor.voyager.courses.read",compact("course"));
    }

    public function getCertificate($slug){
        $module = Module::where('slug',$slug)->first();
        $progress = Progress::where('user_id',Auth::id())->where('module_id',$module->id)->first();
        $progress->certified = 1;
        $progress->save();

        $pdf = App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);

        $pdf->loadView('vendor.voyager.exams.certificate',
            compact('module'))
            ->setPaper('a4', 'landscape');

        return  $pdf->stream('certificat.pdf')
            ->header('Content-Type','application/pdf');

    }



}
