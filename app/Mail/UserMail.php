<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;
    private $req;
    public $img;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Request $request,$admin,$school)
    {
        $this->req = $request;
        $this->admin = $admin;
        $this->school = $school;
        $this->img = ($admin==null)? asset('Images/logo.png'):asset('upload/schools/logo/'.$school->logo);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->admin==null){
            return $this
                ->from('','')
                ->subject($this->req->objet)
                ->markdown('mails.simple')
                ->with([
                    'data' => $this->req,
                    'texte' => $this->req->textarea,
                ]);
        }else{
            return $this
                ->from('',$this->school->name)
                ->subject($this->req->objet)
                ->replyTo($this->admin->email)
                ->markdown('mails.simple')
                ->with([
                    'data' => $this->req,
                    'texte' => $this->req->textarea,
                ]);
        }

    }
}
