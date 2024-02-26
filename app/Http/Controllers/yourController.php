<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class yourController extends Controller
{
    public function show()
    {
        return view("allpost");
    }
}