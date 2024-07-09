<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                $mail->Username = 'carlos.ovando@staffbridge.com.mx';                     //SMTP username
                $mail->Password = 'ravk gxlu tgov upyt'; ///2AvD$iFEbS*t3SM 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS Encryption
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('carlos.ovando@staffbridge.com.mx', 'Carlos Ivan Ovando Toledo');
                $mail->addAddress($user->email, $user->nombre);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Recuperacion de password';
                $mail->Body = '<h3>Hola, este es un correo generado para la recupreacion de tu password, sigue los pasos a continuación</h3>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            return response()->json(['message', 'Correo no encontrado']);
        }
    }
    public function newpassword(){
        return view('nueva_contraseña');
    }
}