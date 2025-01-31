<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('page.about');
    }

    public function team()
    {
        return view('page.team');
    }
}
