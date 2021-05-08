<?php

namespace App\Models;

use App\Mail\NewsletterCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];

    public function sendNewsletter(Newsletter $newsletter)
    {
        Mail::to($this->email)
            ->send(new NewsletterCreated($newsletter));
    }
}
