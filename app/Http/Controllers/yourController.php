<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yourController extends Controller
{
    public function show()
    {
        return view("your");
    }
}