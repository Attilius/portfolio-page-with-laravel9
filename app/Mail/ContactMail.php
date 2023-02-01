<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public string $name, public string $email, public string $body)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): ContactMail
    {
        return $this->subject("Contact mail from " . env('APP_NAME'))->replyTo($this->email)->view('mail.contact');
    }
}
