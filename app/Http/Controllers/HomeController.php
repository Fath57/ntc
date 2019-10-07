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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }


    public function become()
    {
        return view('pages.become-ntc');
    }



    public function take()
    {
        return view('pages.take-action');
    }

    public function empower()
    {
        return view('pages.empower');
    }
    public function hero()
    {
        return view('pages.hero-detail');
    }

    public function cj()
    {
        return view('pages.cercle-jeunes');
    }
    public function sponsor()
    {
        return view('pages.sponsor');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
