<?php

namespace App\Http\Controllers\Admin;

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
        $jumlah_pelanggan = Level::find(2)->users->count();
        return view('admin.beranda.index', [
            'jumlah_pelanggan' => $jumlah_pelanggan,
            'user' => $user
        ]);
    }
}
