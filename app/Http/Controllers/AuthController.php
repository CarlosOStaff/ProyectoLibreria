<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        session_start();

        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $query = DB::table("users")
            ->where('email', $request->email)->first();

        if (password_verify($request->password, $query->password)) {
            $_SESSION['user'] = $query;
            $user = json_decode(json_encode($_SESSION['user'], true));
            if ($user->rol_id === 1) {
                return redirect('/admin/home');
            } elseif ($user->rol_id === 2) {
                return redirect('/cliente/home');
            }
        }
        return view('login');
    }
    public function logout()
    {
        session_start();
        session_destroy();
        return view('welcome');
    }
    public function register(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $query = DB::select(
            'SELECT email 
            FROM users 
            WHERE email = (:email)',
            ['email' => $request->email]
        );
        if ($query) {
            DB::insert('INSERT INTO users (email,password,rol_id)
            VALUES (:email,:password,);',
                [
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
                ]
            );
        }
        return response()->json(['message', 'El correo ingresado ya existe']);
    }
}

