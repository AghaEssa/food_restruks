<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // No business logic yet; purely a static replica view
        return view('dashboard.index');
    }
}
