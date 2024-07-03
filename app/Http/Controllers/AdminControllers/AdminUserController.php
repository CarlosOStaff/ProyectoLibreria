<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class AdminUserController extends Controller
    {
        public function index()
        {
            if (isset($_SESSION['user'])) {
                $admin_id = $_SESSION['user']->id;
                $admin_rol = $_SESSION['user']->rol_id;
                $query = DB::select(
                    'SELECT * FROM users 
                    WHERE id = (:id) 
                    AND rol_id = (:rol_id);',
                    ['id' => $admin_id, 'rol_id' => $admin_rol]
                );
                if ($query) {
                    $users = DB::select('SELECT  u.id,u.nombre,u.apellido,u.ciudad_id,u.email,c.id,c.nombre_ciudad
                    FROM users u
                    JOIN cities c
                    ON u.ciudad_id = c.id
                    WHERE rol_id = 2;');
                    return view('U_Admin.lista_usuarios')->with('users', $users);
                }
            }
        }
        public function destroy($id)
        {
            $admin_id = $_SESSION['user']->id;
            $admin_rol = $_SESSION['user']->rol_id;

            $query = DB::select(
                'SELECT id, rol_id 
                FROM users 
                WHERE id = (:id) 
                AND rol_id = (:rol_id)',
                ['id' => $admin_id, 'rol_id' => $admin_rol]
            );
            if ($query) {
                DB::delete('DELETE FROM users WHERE id = (:id) AND rol_id = 2',['id'=>$id]);
                return redirect('/lista/usuarios')->with('success','usuario eliminado correctamente');
            } else {
                return 'no tienes permiso para borrar este usuario';
            }
        }
    }
}