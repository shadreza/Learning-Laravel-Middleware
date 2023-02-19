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


    // adding sessions
    public function index(Request $request)
    {
        // session added
        // $request->session()->put(['shad' => 'master instructor']);
        // session(['tuba' => 'wife']);

        return $request->session()->all();

        // return view('home');
    }
}
