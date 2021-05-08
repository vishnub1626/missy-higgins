<?php

namespace App\Listeners;

use App\Events\NewsletterCreated;
use App\Models\Subscription;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewsletterToSubscribers implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(NewsletterCreated $event)
    {
        $newsletter = $event->newsletter;

        if ($newsletter->to == 'all') {
            $subscriptions = Subscription::all();
        } else {
            $subscriptions = Subscription::whereEmail($newsletter->to)->get();
        }

        $subscriptions->each->sendNewsletter($newsletter);
    }
}
