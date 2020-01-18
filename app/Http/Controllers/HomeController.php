<?php

namespace App\Http\Controllers;

use Artisan;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Optimize application.
     *
     * @return \Illuminate\View\View
     */
    public function clear()
    {
        Artisan::call('optimize');

        echo '<h1>Optimized</h1>';
    }
}
