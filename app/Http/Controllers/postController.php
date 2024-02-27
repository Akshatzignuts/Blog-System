<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function postIndex()
    {
        return view('post');
    }
    
}