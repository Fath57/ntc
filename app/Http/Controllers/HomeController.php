<?php

namespace App\Http\Controllers;

use App\Audio;
use App\AudioCategory;
use App\Member;
use App\Models\Cj;
use App\Models\Event;
use App\Models\Presse;
use App\Models\Program;
use App\Models\Story;
use App\Models\Village;
use App\Problem;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $members = Member::all();
        $posts = Post::where('status',Post::PUBLISHED)->orderBy('created_at','desc')->skip(1)->take(4)->get();
        $lastPost = Post::where('status',Post::PUBLISHED)->orderBy('created_at','desc')->first();
        $events  = Event::all();
        return view('pages.index',compact('members','posts','lastPost','events'));
    }


    public function become()
    {
        $members = Member::all();
        $events  = Event::all();
        $stories = Story::all();
        return view('pages.become-ntc',compact('members','events','stories'));
    }

    public function take()
    {

        $problems = Problem::paginate(6);
        $presses = Presse::all()->where('type',"presse");

        return view('pages.take-action',compact('problems','presses'));
    }

    public function empower()
    {
        $communityProgram = Program::all()->where('type',env('PROGRAM_COMMUNITY'))->first();
        $doorTodoorProgram = Program::all()->where('type',env('DOOR_TO_DOOR'))->first();
        $townHallProgram = Program::all()->where('type',env('TOWN_HALL'))->first();
        $events  = Event::all();
        $journauxLocaux = Audio::paginate(6)->where("category_id",AudioCategory::where('code',"journal")->first()->id);
        $problemLocaux = Audio::paginate(6)->where("category_id",AudioCategory::where('code',"problem")->first()->id);


        $radios = Presse::all()->where('type',"radio");

        return view('pages.empower',compact('communityProgram','doorTodoorProgram','townHallProgram','events','journauxLocaux','problemLocaux',"radios"));
    }
    public function hero()
    {

        $villages = Village::paginate(6);
        return view('pages.hero-detail',compact('villages'));
    }

    public function cj()
    {
        $cjs = Cj::with("coordonnateur",'events')->get();
        return view('pages.cercle-jeunes',compact("cjs"));
    }

    public function cjDetail($slug)
    {
        $cj = Cj::with("coordonnateur",'events')->where('slug',$slug)->whereNotNull('name')->first();
        $autresCj =  Cj::with("coordonnateur",'events')->whereNotIn('id',[$cj->id])->whereNotNull('name')->get();
        return view('pages.cercle-jeunes-detail',compact("cj","autresCj"));
    }
    public function event($slug)
    {
        $event = Event::with("cj")->where('slug',$slug)->first();
        $autresEvents =  Event::with("cj")->whereNotIn('id',[$event->id])->orderByDesc('created_at')->limit(5)->get();
        return view('pages.event-detail',compact("event","autresEvents"));
    }

    public function sponsor()
    {
        return view('pages.sponsor');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function register(Request $request){

        try{
            $verifyUser = User::where('email',$request->email)->first();

            if ($verifyUser!=null){
                return ['error'=>true,'message'=>'Cet email est déjà utilisé'];
            }
           /* if (isset($request->cj)){
                $role = Role::all()->where('name','cj')->first();
            }elseif (isset($request->village)) {
                $role = Role::all()->where('name','hero')->first();
            }else{
                $role = Role::all()->where('name','membre')->first();

            }*/
            $role = Role::all()->where('name','membre')->first();
            $user = User::create([
                'name'=>$request->nom.' '.$request->prenom,
                'password'=>Hash::make($request->password),
                'email'=>$request->email,
                'address1'=>$request->adress1,
                //'adsress2'=>$request->adress2,
                'phone'=>$request->tel,
                'whatspapp'=>$request->whatsapp_tel,
                'occupation'=>$request->profession,
                'birthday'=>$request->date_naissance,
                'place_of_birth'=>$request->lieu_naissance,
                'hero_of'=>$request->village,
                'role_id'=>$role->id,
                'remember_token'=>Str::random(65),
            ]);

           /* if (isset($request->cj)){
                Cj::create(['user_id'=>$user->id]);
            }*/
            return ['error'=>false,'message'=>'Inscription effectuée avec succès','user'=>$user];
        }catch (\Exception $exception){
            return ['error'=>true,'message'=>"Oops! une erreur s'est produite, veuillez réessayer svp."];

        }


    }

    public function blog(){

        $posts = Post::where('status',Post::PUBLISHED)->orderByDesc('created_at')->paginate(12);

        return view('pages.blog',compact('posts'));
    }

    public function blogDetail($slug){

        $post = Post::whereSlug($slug)->first();
        $lastPosts = Post::all()->where('status',Post::PUBLISHED)->sortByDesc('created_at')->take(5);
        $autresEvents =  Event::with("cj")->orderByDesc('created_at')->limit(5)->get();

        return view('pages.blog-detail',compact('post','lastPosts','autresEvents'));

    }

    public function loginCJ(Request $request){

        $user = User::where('email',$request->email)->first();

            if($user!=null && Hash::check($request->password,$user->pasword)){
                $cjRole = Role::where('name','cj')->firrs();
                $user->role_id  = $cjRole->id;
                if (!Auth::check()){
                    Auth::login($user);
                }
                Cj::create(['user_id'=>$user->id]);

                return ['error'=>false,'message'=>"Cercle de Jeune créé"];
            }
            return ['error'=>true,'message'=>"Désolé aucun compte n'existe avec ces identifiants."];


        }

        public function registerForm(){
        return view('auth.register');
        }

        public function verifyUserEmail($token){
        $user = User::whwre('remember_token',$token)->first();

        if ($user==null){
            return redirect(url('/'))->with(
                [
                    "error"=>"Oops, assurez vous d'avoir créer un compte."
                ]
            );
        }else{
            $user->	email_verified_at = Carbon::now();
            $user->save();
            return redirect(url('/'))->with(
            [
                "success"=>"Votre compte a été vérifié avec succès."
            ]
            );
        }
        }
}
