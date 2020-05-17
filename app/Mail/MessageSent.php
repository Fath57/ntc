<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class MessageSent extends Mailable
{
    use Queueable, SerializesModels;
    private $req;
    public $img;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Request $request)
    {
        $this->req = $request;

        $this->img = asset('Images/logo.png');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

            return $this
                ->from(env('MAIL_FROM_ADDRESS'),$this->req->name)
                ->subject('Message')
                ->replyTo($this->req->email)
                ->markdown('mails.simple')
                ->with([
                    'texte' => $this->req->message,
                ]);


    }
}
