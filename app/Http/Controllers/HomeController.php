<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\IpHelper;
use App\Library\StringHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['terms']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2($lang = 'en')
    {
        return view('home2', compact('lang'));
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
