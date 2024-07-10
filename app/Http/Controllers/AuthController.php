<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Load Composer's autoloader
require 'C:\laragon\www\prueba\ProyectoPrueba\vendor\autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
                $admin = $_SESSION['admin'] = $query;
                return redirect('/admin/home');
            } elseif ($user->rol_id === 2) {
                $cliente = $_SESSION['cliente'] = $query;
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
            return response()->json(['message', 'El correo ya existe']);
        }
        $newUser = DB::insert(
            'INSERT INTO users (rol_id,nombre,apellido,ciudad_id,email,password) 
            VALUES (:rol_id,:nombre,:apellido,:ciudad_id,:email,:password)',
            [
                'rol_id' => 2,
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'ciudad_id' => $request->ciudad_id,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]
        );
        return view('login');
    }
    public function newUser()
    {
        $ciudades = DB::select('SELECT * FROM cities;');
        return view('register')->with('ciudades', $ciudades);
    }
    public function recuperarContraseña()
    {
        return view('recuperar_contraseña');
    }
    public function forgotPassword(Request $request)
    {
        $query = DB::select(
            'SELECT * FROM users 
            WHERE email = (:email)',
            ['email' => $request->email]
        );
        if ($query) {
            $user = reset($query);
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'carlos.ovando@staffbridge.com.mx';
                $mail->Password = 'ravk gxlu tgov upyt'; ///2AvD$iFEbS*t3SM 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('carlos.ovando@staffbridge.com.mx', 'Carlos Ivan Ovando Toledo');
                $mail->addAddress('carlos.ovando@staffbridge.com.mx', $user->nombre);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Recuperacion de password';
                $mail->Body = 'Hola, este es un correo generado para la recuperación de tu contraseña. Sigue los pasos a continuación:<br>
                        Haz clic en el siguiente enlace: <a href="' . url('/nuevo-password/' . $user->id) . '">Recuperar contraseña</a>';
                $mail->AltBody = 'Hola, este es un correo generado para la recuperación de tu contraseña. Sigue los pasos a continuación: 
                        Copia y pega el siguiente enlace en tu navegador:' . url('/nuevo-password/' . $user->id);


                $mail->send();
                return redirect('/recuperar_contraseña')->with('message_ok', 'Correo enviado con exito');
            } catch (Exception $e) {
                error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                return redirect('/recuperar_contraseña')->with('message_error', 'No se pudo enviar el correo. Inténtalo de nuevo más tarde.');
            }
        } else {
            return response()->json(['message', 'Correo no encontrado']);
        }
    }
    public function newpassword($id, Request $request)
    {
        $user = DB::select(
            'SELECT * FROM 
            users WHERE id = (:id)',
            ['id' => $id]
        );
        if ($user) {
            return view('nueva_contraseña')->with('user', $user);
        }
        return response()->json(['message', 'usuario no encontrado']);
    }
    public function uploadPassword($id, Request $request)
    {
        $user = DB::select(
            'SELECT * FROM 
            users WHERE id = (:id)',
            ['id' => $id]
        );
        if ($user) {
            $newPassword = DB::update(
                'UPDATE users 
                SET password = (:password)
                WHERE id = (:id)',
                [
                    'id' => $id,
                    'password' => bcrypt($request->password),
                ]
            );
            return view('nueva_contraseña')->with('user', $user);
        }
        return response()->json(['message', 'usuario no encontrado']);
    }
}