<?php

namespace App\Http\Controllers\Bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Carbon\Carbon;
use Auth;
use DB;

class BerandaController extends Controller
{
    public function index()
    {
        return view('bank.beranda.index');
    }
}
