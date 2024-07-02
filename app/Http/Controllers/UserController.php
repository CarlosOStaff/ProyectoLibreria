<?php

namespace App\Http\Controllers;

use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function catalogues()
    {
        $catalogues =
            DB::select('SELECT c.id,c.nombre_ciudad,c.estado_id,s.nombre_estado,s.pais_id,co.nombre_pais
                FROM cities c
                JOIN states s
                ON c.estado_id = s.id
                JOIN countries co
                ON s.pais_id = co.id;');
        return view('new_user', compact('catalogues'));
    }
    public function city()
    {
        $catalogues =
            DB::select('SELECT c.id,c.nombre_ciudad,c.estado_id,s.nombre_estado,s.pais_id,co.nombre_pais
                FROM cities c
                JOIN states s
                ON c.estado_id = s.id
                JOIN countries co
                ON s.pais_id = co.id;');
        return view('register')->with('catalogues', $catalogues);
    }
    public function index()
    {
        $users =
            DB::select('SELECT u.id,u.nombre,u.apellido,u.email,c.nombre_ciudad,s.nombre_estado,con.nombre_pais
                FROM users u
                JOIN cities c
                ON u.ciudad_id = c.id
                JOIN states s
                ON c.estado_id = s.id
                JOIN countries con
                ON s.pais_id = con.id;');
        return view('users', compact('users'));
    }

    public function newUser(Request $request)
    {
        $catalogues = $this->index();
        $ciudad_id = $request->ciudad_id;
        $ciudad_id = intval($ciudad_id);
        $newUser = DB::insert(
            'INSERT INTO users (nombre,apellido,ciudad_id,email,password) 
                VALUES (:nombre,:apellido,:ciudad_id,:email,:password)',
            [
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'ciudad_id' => $ciudad_id,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]
        );
        return view('welcome');
    }

    public function store(Request $request)
    {
        $catalogues = $this->index();
        $ciudad_id = $request->ciudad_id;
        $ciudad_id = intval($ciudad_id);
        $user = DB::insert(
            'INSERT INTO users (nombre,apellido,ciudad_id,email,password) 
                VALUES (:nombre,:apellido,:ciudad_id,:email,:password)',
            [
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'ciudad_id' => $ciudad_id,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]
        );
        return redirect('users')->with($catalogues->getData());
    }
    public function edit($id)
    {
        $catalogues = $this->catalogues();
        $user =
            DB::select('SELECT u.id,u.nombre,u.apellido,u.email,c.nombre_ciudad,s.nombre_estado,con.nombre_pais
                FROM users u
                JOIN cities c
                ON u.ciudad_id = c.id
                JOIN states s
                ON c.estado_id = s.id
                JOIN countries con
                ON s.pais_id = con.id
                WHERE u.id = (:id)', ['id' => $id]);
        return view('user_edit', compact('user'))->with($catalogues->getData());
    }
    public function update(Request $request, $id)
    {
        $catalogues = $this->index();
        $ciudad_id = $request->ciudad_id;
        $ciudad_id = intval($ciudad_id);
        $userUpdate = DB::update('UPDATE users SET nombre = (:nombre),apellido = (:apellido),ciudad_id = (:ciudad_id),email = (:email)
        WHERE id = (:id)',
            [
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'ciudad_id' => $ciudad_id,
                'email' => $request->email,
                'id' => $id
            ]
        );
        return redirect('users')->with($catalogues->getData());
    }
    public function destroy($id)
    {
        $users = $this->index();
        $userDelete = DB::delete('DELETE FROM users WHERE id = (:id)', ['id' => $id]);
        return redirect('/users')->with($users->getData());
    }
}
