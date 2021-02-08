<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        if(Auth::user()) {
            if(Auth::user()->hasAnyRole('admin')) {
                return redirect()->route('admin.beranda.index');
            }

            elseif(Auth::user()->hasAnyRole('pelanggan')) {
                return redirect()->route('pelanggan.beranda.index');
            }

            elseif(Auth::user()->hasAnyRole('bank')) {
                return redirect()->route('bank.beranda.index');
            }

            return false;
        }
    }
}
