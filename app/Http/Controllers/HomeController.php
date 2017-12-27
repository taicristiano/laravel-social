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
        $this->middleware('auth')->except('terms');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = 'en')
    {
        return view('home', compact('lang'));
    }

    /**
     * Show terms
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('terms');
    }
}
