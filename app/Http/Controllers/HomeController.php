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
    public function index()
    {
        // lakukan pengecekan, jika 
        if (Auth()->user()->role == 'admin' || auth()->user()->role == 'manager') {
            return redirect('admin/dashboard');
        } else {
            return redirect('frontend/dashboard');
        }
        
    }
}
