<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSellerOtp extends Mailable
{
    use Queueable, SerializesModels;

    private $mailDetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailDetails)
    {
        $this->mailDetails = $mailDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('seller.auth.email.send-otp-email')->subject("Welcome to I-Kart Online Selling Platforms")->with('mailDetails', $this->mailDetails);
    }
}
