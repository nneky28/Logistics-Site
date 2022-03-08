<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Verification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = 'Nneky';
        $address = env('MAIL_FROM_ADDRESS');
        $subject ='Email verifaction';
        $otp = '12345';


        return $this->view('mail.verify')
           ->from ($address, $name)
           ->replyto($address, $name)
           ->subject($subject)
           ->with(['data'=>$this->data]);

        
    }
}
