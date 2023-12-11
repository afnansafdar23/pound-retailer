<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::all();

        return view('admin.dashboard.index')->with(['users' => $users]);
    }
}
