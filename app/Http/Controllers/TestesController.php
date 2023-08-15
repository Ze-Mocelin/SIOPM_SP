<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestesController extends Controller
{
    public function index(Request $request)
        {
            return view('AdminLTE320/login');
        }
}
