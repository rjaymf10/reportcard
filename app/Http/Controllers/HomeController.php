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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Optimize application.
     *
     * @return \Illuminate\View\View
     */
    public function clear()
    {
        try {
            Artisan::call('optimize', ['--quiet' => true]);
        } catch(Exception $e) {
            dd($e);
        }

        echo '<h1>Optimized</h1>';
    }
}
