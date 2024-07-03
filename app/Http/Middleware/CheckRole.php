<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class CheckRole
    {
        public function handle(Request $request, Closure $next): Response
        {
            if (isset($_SESSION['user'])) {
                $user_rol = $_SESSION['user']->rol_id;
                if ($user_rol === 1) {
                    return 'a';
                    return redirect('/admin/home');
                } elseif ($user_rol === 2) {
                    return redirect('/cliente/home');
                }
            } return redirect('/inicio_session');
            // Si el usuario no tiene el rol adecuado, retornar un error 403
            abort(403, 'No tienes permiso para acceder a esta página.');
        }
    }
}

