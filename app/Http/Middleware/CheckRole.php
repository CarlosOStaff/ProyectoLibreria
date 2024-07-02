<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ($user && in_array($user->rol_id, [1, 2])) {
            // Dependiendo del rol, redirigir a la vista correspondiente
            if ($user->rol_id === 1) {
                return redirect('/admin/home');
            } elseif ($user->rol_id === 2) {
                return redirect('/cliente/home');
            }
        }

        // Si el usuario no tiene el rol adecuado, retornar un error 403
        abort(403, 'No tienes permiso para acceder a esta página.');
    }
}
