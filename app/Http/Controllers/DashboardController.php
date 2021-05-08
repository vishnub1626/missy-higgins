<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $subscriptions = Subscription::paginate(2);

        return view('admin.dashboard', [
            'subscriptions' => []
        ]);
    }
}
