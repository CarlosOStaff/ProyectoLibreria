<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class AdminUserController extends Controller
    {
        public function index()
        {
            if (isset($_SESSION['admin'])) {
                $admin_id = $_SESSION['admin']->id;
                $admin_rol = $_SESSION['admin']->rol_id;
                $query = DB::select(
                    'SELECT * FROM users 
                    WHERE id = (:id) 
                    AND rol_id = (:rol_id);',
                    ['id' => $admin_id, 'rol_id' => $admin_rol]
                );
                if ($query) {
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
            }
        }
        public function destroy($id)
        {
            $admin_id = $_SESSION['admin']->id;
            $admin_rol = $_SESSION['admin']->rol_id;
            $query = DB::select(
                'SELECT id, rol_id 
                FROM users 
                WHERE id = (:id) 
                AND rol_id = (:rol_id)',
                [
                    'id' => $admin_id,
                    'rol_id' => $admin_rol
                ]
            );
            if ($query) {
                DB::delete(
                    'DELETE FROM users 
                    WHERE id = (:id) 
                    AND rol_id = 2',
                    ['id' => $id]
                );
                return redirect('admin/lista/usuarios')->with('success', 'usuario eliminado correctamente');
            } else {
                return 'no tienes permiso para borrar este usuario';
            }
        }
    }
}