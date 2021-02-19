<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Level;
use DB;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.auth.index',[
            'users' => $users
        ]);
    }
    public function detail(User $user)
    {
        return view('admin.auth.detail.index', compact('user'));
    }
    public function search(Request $request)
    {           
        $search = $request->search;
        $users = User::where('name','like',"%".$search."%" )->paginate(5);
        return view('admin.auth.index', compact('users'));
    }
}
