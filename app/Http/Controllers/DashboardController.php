<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request)
    {
        $subscriptions = Subscription::query()
            ->when($request->input('q'), function ($query, $q) {
                $query->where('email', 'LIKE', "%{$q}%");
            })
            ->paginate(30);

        return view('admin.dashboard', [
            'subscriptions' => $subscriptions
        ]);
    }
}
