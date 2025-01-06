<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

    class AdminUserController extends Controller
    {
        public function index()
        {
            $user = auth()->user();
            if (isset($user)) {
                if ($user->rol_id === 1) {
                    $users = DB::select(
                        'SELECT u.img_perfil,u.id 
                    AS user_id,u.nombre,u.apellido,u.ciudad_id,u.email,c.nombre_ciudad
                    FROM users u
                    JOIN cities c
                    ON u.ciudad_id = c.id
                    WHERE rol_id = 2
                    AND u.email_verified_at IS NOT NULL;'
                    );
                    return view('U_Admin.lista_usuarios')->with('users', $users);
                }
                return redirect('inicio_session')->with('login_error', 'Usuario no encontrado debes de iniciar sesion');
            }
        }
        public function destroy($id)
        {
            $user = auth()->user();
            if ($user->rol_id === 1) {
                DB::delete(
                    'DELETE FROM users 
                    WHERE id = (:id) 
                    AND rol_id = 2',
                    ['id' => $id]
                );
                return redirect('admin/lista/usuarios')->with('success', 'usuario eliminado correctamente');
            } else {
                return redirect('inicio_session')->with('login_error', 'no tienes permiso para borrar este usuario, inicia sesion con un usario con los permisos adecuados');
            }
        }
    }