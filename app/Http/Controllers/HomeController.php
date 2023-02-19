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

        // return $request->session()->all();

        // session(['shad2' => 'learning']);
        // echo session('shad2');

        // deleting a specific session
        // $request->session()->forget('shad2');

        // delete all the session
        // $request->session()->flush();


        // flashing data
        // data stored for only one session
        // next time its gone
        // $request->session()->flash('message', 'post has been created');

        // to keep the data abit more [little longer than flash]
        // $request->session()->reflash();

        // to keep only one msg and delete all else
        // $request->session()->keep('message');


        return $request->session()->get('message');

        // return view('home');
    }
}
