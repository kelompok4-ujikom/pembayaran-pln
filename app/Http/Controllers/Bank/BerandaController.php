<?php

namespace App\Http\Controllers\Bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Level;
use App\User;
use Carbon\Carbon;
use Auth;
use DB;


class BerandaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('bank.beranda.index', [
            'user' => $user,
        ]);
    }
}
