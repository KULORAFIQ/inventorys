<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Periksa apakah pengguna telah login sebelum menjalankan logout
            if (isset($_SESSION['user_id'])) {
                // Lakukan logout di sini
                session_destroy(); // Contoh, sesuaikan dengan cara Anda mengelola sesi.
                // Redirect ke halaman login atau halaman lain yang sesuai
                header('Location: /login');
                exit();
            } else {
                // Handle kesalahan jika pengguna tidak diotentikasi
            }
        }
        
    }

    
}
