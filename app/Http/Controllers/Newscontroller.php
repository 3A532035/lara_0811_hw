<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newscontroller extends Controller
{
    //

    public function news()
    {
        return view('news');
    }
}
