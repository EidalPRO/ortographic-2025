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
        $this->middleware('auth')->except(['index','about', 'galeria']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index2()
    {
        return view('home');
    }

    
    public function index() {
        return view('welcome');
    }

    public function  about() {
        return view('sin-auth.about');
    }

    public function galeria() {
        return view('sin-auth.galeria');
    }
}
