<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $info = [
            'name' => $request->name, // Perbaiki 'email' menjadi 'name'
            'password' => $request->password,
        ];

        if (Auth::attempt($info)) {
            if (Auth::user()->level == 'admin') {
                return redirect('admindash')->with('loginberhasil', 'Login berhasil!!');
            } elseif (Auth::user()->level == 'petugas') {
                // Pengguna berhasil login
                // Set sesi 'name' dengan nama pengguna
                session(['name' => Auth::user()->name]);
                return redirect('petugasdash')->with('loginberhasil', 'Login berhasil!!');;
            }
        }

        // Jika otentikasi gagal, tampilkan pesan kesalahan
        return redirect('login')->with('loginError', 'Login gagal!, silahkan cek nama pengguna atau kata sandi anda ');
    }
    public function signup()
    {
        return view('registrasi');
    }
       
    public function signupsave(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("dashboard");
    }
}


