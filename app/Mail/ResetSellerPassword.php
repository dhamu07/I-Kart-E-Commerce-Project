<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetSellerPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $token)
    {
        $this->name = $name;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $seller['name'] = $this->name;
        $seller['token'] = $this->token;

        return $this->markdown('seller.auth.reset-password.reset-password-template')->subject("Password Reset Link")->with('seller', $seller);

//        return $this->from("yoursenderemail@mail.com", "Sender Name")
//                    ->subject('Password Reset Link')
//                    ->view('template.reset-password', ['user' => $user]);
    }
}
