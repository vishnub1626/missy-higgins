<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $newsletter;

    public function __construct($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function build()
    {
        return $this->subject($this->newsletter->subject)
            ->view('emails.newsletter', [
                'body' => $this->newsletter->body
            ]);
    }
}
