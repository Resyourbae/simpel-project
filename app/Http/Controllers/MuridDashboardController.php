<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridDashboardController extends Controller
{
    public function index()
    {
        return view('murid.dashboard');
    }
}
