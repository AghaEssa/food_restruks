<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
        return view('outlets.index'); // your existing list page
    }

    public function create()
    {
        // Static for now (no DB). Later you can pass waiters/statuses from DB.
        $statuses = ['Active', 'Inactive'];
        $waiters  = ['Select', 'John Carter', 'Anna Rice']; // sample
        $online   = ['Yes', 'No'];

        return view('outlets.create', compact('statuses','waiters','online'));
    }
}
