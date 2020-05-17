<?php

namespace App\Http\Controllers;


use App\Mail\MessageSent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;

class MailboxController extends Controller
{

    public function message(Request $request){

        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'name'=>'required',
            'message'=>'required'
        ]);
        if ($validator->fails()){
            return ['error'=>true,'message'=> $validator->getMessageBag()->first()];
        }
        try{

            $user = User::where('email',$request->email)->first();
          /*  if ($user==null){
                $user = User::create([
                    'slug'=>Str::slug('user '.time(),'-'),
                    'name'=>$request->name,
                    'email'=>$request->email,
                ]);
            }*/

            $admin = User::all()->where('role_id',Role::where('name',User::NTC_ADMIN)->first()->id)->first();
            Mail::to("aattayaya@gmail.com")->send(new MessageSent($request));

            //Message::create($request->all());

            return ['error'=>false,'message'=> "Message envoyé avec succès"];

        }catch (\Exception $exception){

            return ['error'=>true,'message'=> $exception->getMessage()];
        }

    }

  /*  public function addEmail(Request $request){
        try{

            $email = Newsletter::where('email',$request->email)->first();
            if ($email==null){
                Newsletter::create($request->all());

            }else{
                return ['error'=>false,'message'=> __('sentences.newsletter_already')];

            }

            return ['error'=>false,'message'=>  __('sentences.newsletter_success')];
        }catch (\Exception $exception){

            return ['error'=>true,'message'=>$exception->getMessage()];
        }

    }*/

}
