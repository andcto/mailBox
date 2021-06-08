<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function inbox()
    {
        return view('mailbox\inbox');
    }

    public function compose()
    {
        return view('mailbox\compose');
    }

    public function read()
    {
        return view('mailbox\read');
    }
}
