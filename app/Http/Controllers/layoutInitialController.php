<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutInitialController extends Controller
{
    public function layoutInitial()
    {
        return view('layouts/layout');
    }
}
