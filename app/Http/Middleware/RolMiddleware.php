<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']->rol_id;

                if ($user === 1) {
                    return $next($request);
                } elseif($user === 2) {
                    return redirect('/admin/home');
                    /* return response()->json(['message','no tienes permisos para acceder a este usuario']); */
                }
            } else {
                return response()->json(['message', 'Debes de iniciar sesion']);
            }
        }
        return $next($request);
    }
}
