<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Events\NewsletterCreated;

class NewsletterController extends Controller
{
    public function show(Request $request)
    {
        $to = trim($request->input('to'));

        if ($to == 'all') {
            $subscribersCount = Subscription::count();

            $toText = "{$subscribersCount} " . (string) Str::plural('subscriber', $subscribersCount);
        }

        return view('admin.newsletter', [
            'to' => $to,
            'toText' => isset($toText) ? $toText : $to
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'to' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        $newsletter = Newsletter::create($validated);

        event(new NewsletterCreated($newsletter));

        return redirect('/admin/dashboard')->with('message', 'New newsletter created.');
    }
}
