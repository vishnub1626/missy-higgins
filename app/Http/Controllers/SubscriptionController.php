<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create()
    {
        return view('subscription.subscribe');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $existingSubscription = Subscription::whereEmail($validated['email'])->first();

        if ($existingSubscription) {
            return view('subscription.confirmation', [
                'subscription' => $existingSubscription,
                'exists' => true
            ]);
        }

        $subscription = Subscription::create($validated);

        return view('subscription.confirmation', [
            'subscription' => $subscription,
            'exists' => false
        ]);
    }
}
