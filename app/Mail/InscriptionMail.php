<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InscriptionMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $subject
     * @param $view
     */
    public function __construct($user,$subject,$view)
    {
        $this->user = $user ;
        $this->view = $view ;
        $this->subject = $subject ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown($this->view)
            ->from(env('MAIL_FROM_ADDRESS'))
            ->subject($this->subject);
    }
}
