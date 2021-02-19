<?php

namespace App\Http\Controllers\Pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Level;
use App\User;
use Auth;
use DB;

class AuthController extends Controller
{
    //
    public function edit_profile(User $user) 
    {
        $user = Auth::user();
        return view('pelanggan.auth.edit', ['user' => $user]);
    }

    public function update(User $user)
    { 
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ], [
            'name.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Data harus berupa email!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password harus diisi!',
            'password.min' => 'Password minimal 8 karakter!',
            'password.confirmed' => 'Password harus serupa!',
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return redirect()->route('pelanggan.beranda.index');
    }
}
