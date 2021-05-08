<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create()
    {
        return view('subscription.subscribe');
    }

    public function store()
    {
        return view('subscription.confirmation');
    }
}
