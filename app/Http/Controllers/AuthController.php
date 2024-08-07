<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


//Load Composer's autoloader
require 'C:\laragon\www\prueba\ProyectoPrueba\vendor\autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (!$user || !password_verify($request->password, $user->password)) {
                return redirect('/inicio_session')->with('message_error_validacion', 'Correo o contraseña invalido');
            }
            if (!is_null($user->email_verified_at)) {
                $token = $user->createToken('my_token', ['*'], now()->addDays())->plainTextToken;
                $cookie = cookie('cookie_token', $token, 60 * 24);
                if ($user->rol_id === 1) {
                    return redirect('/admin/home')->withCookie($cookie);
                } elseif ($user->rol_id === 2) {
                    return redirect('/cliente/home')->withCookie($cookie);
                }
            }
            return redirect('/inicio_session')->with('message_error_validacion', 'Tu correo no esta validado');
        }
        return redirect('/login')->with('message_error_validacion', 'Correo no encontrado');
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();
        $cookie = Cookie::forget('cookie_token');
        return redirect('/');
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
            return redirect('/registro/nuevo_usuario')->with('message_error_register', 'El correo ya existe');
        }

        $userId = DB::table('users')->insertGetId([
            'rol_id' => 2,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'ciudad_id' => $request->ciudad_id,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $idEncrypt = base64_encode($userId);
        $mail = new PHPMailer();
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'carlos.ovando@staffbridge.com.mx';
            $mail->Password = 'ravk gxlu tgov upyt'; // Actualiza con la contraseña correcta
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('carlos.ovando@staffbridge.com.mx', 'Carlos Ivan Ovando Toledo');
            $mail->addAddress($request->email, $request->nombre);
            $mail->isHTML(true);
            $mail->Subject = 'Verificacion de cuenta';
            $mail->Body = '<div style="max-width:100%; width:80%; margin:auto; padding:2vw; font-family: Arial, sans-serif; background-color: #f9f9f9; border:0.2vw solid #ddd;">
                            <h3 style="font-style:italic; font-weight:bold; color:black;">Hola, este es un correo generado para la verificación de tu cuenta en nuestra librería.</h3>
                            <p style="font-style:italic; color: #555;">Sigue los pasos a continuación.</p>
                            <p style="color: #555;">Haz clic en el siguiente enlace:</p>
                            <a href="' . url('/validar/correo/' . $idEncrypt) . '" style="display: inline-block; padding: 1vw 1.5vw; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Confirmar cuenta</a>
                        </div>';
            $mail->send();
            return redirect('/registro/nuevo_usuario/')->with('message_cliente_ok', 'Usuario creado con exito, verifique su cuenta por correo');
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    public function validarCuenta()
    {
        return view('validar_cuenta');
    }
    public function validarCorreo($id)
    {
        $idEncrypt = base64_decode($id);
        $correoValidacion = \DB::select(
            'SELECT id FROM users 
            WHERE id = (:id)',
            ['id' => $idEncrypt]
        );
        if ($correoValidacion) {
            $validar = \DB::update(
                'UPDATE users 
                SET email_verified_at = (:email_verified_at)
                WHERE id = (:id)',
                [
                    'email_verified_at' => Carbon::now(),
                    'id' => $idEncrypt
                ]
            );
            return redirect('/inicio_session')->with('message_ok', 'Correo validado con exito');
        }
        return redirect('/validar/cuenta_de_usuario')->with('message_error', 'El correo ingresado no existe');
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
        $user = User::where('email', $request->email)->first();
        $user->password_reset_token = \Str::random(20);
        $user->password_reset_expires_at = Carbon::now()->addMinutes(1);
        $user->save();
        if ($user) {
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
                $mail->addAddress($user->email, $user->nombre);     //Add a recipient
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Recuperacion de password';
                $mail->Body =
                    '<div style="max-width:100%; width:80%; margin: auto; padding: 2vw; font-family: Arial, sans-serif; background-color: #f9f9f9; border: 0.2vw solid #ddd;">
                        <h3 style="font-style: italic; font-weight: bold; color: black;">Hola, este es un correo generado para la recuperación de tu contraseña.</h3>
                        <p style="font-style: italic; color: #555;">Sigue los pasos a continuación para poder cambiar tu contraseña:</p>
                        <p style="color: #555;">Haz clic en el siguiente enlace:</p>
                        <a href="' . route('newpassword', $user->password_reset_token) . '" style="display: inline-block; padding: 1vw 1.5vw; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Cambiar contraseña</a>
                    </div>';

                $mail->send();
                return redirect('/recuperar_contraseña')->with('message_ok', 'Correo enviado con exito');
            } catch (Exception $e) {
                error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                return redirect('/recuperar_contraseña')->with('message_error', 'No se pudo enviar el correo. Inténtalo de nuevo más tarde.');
            }
        } else {
            return redirect('/recuperar_contraseña')->with('message_error', 'No se pudo enviar el correo. Inténtalo de nuevo más tarde.');
        }
    }
    public function newpassword($token)
    {
        $user = User::where('password_reset_token', $token)
            ->where('password_reset_expires_at', '>', now())
            ->first();
        if ($user) {
            return view('nueva_contraseña')->with(['user' => $user->nombre, 'token' => $token]);
        }
        return redirect('/recuperar_contraseña')->with('message_error', 'Usuario no encontrado o el enlace ha caducado');
    }
    public function uploadPassword($token, Request $request)
    {
        $user = User::where('password_reset_token', $token)->first();
        if ($user) {
            if (password_verify($request->password, $user->password)) {
                return redirect('/nuevo-password/' . $token)
                    ->with('message_password_error', 'Tu nueva contraseña no debe ser igual que actual');
            }
            $user->password = bcrypt($request->password);
            $user->password_reset_token = null;
            $user->password_reset_expires_at = null;
            $user->save();
            return \Redirect::route('iniciar-sesion')
                ->with('message_password', 'La contraseña se ha actualizado correctamente.');
        }
        return redirect('/recuperar_contraseña')->with('message_error', 'Usuario no encontrado o el enlace a caducado');
    }
    /*funciones de prueba sanctum*/
    public function newindex(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !password_verify($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        $cookie = cookie('cookie_token', $token, 60 * 24);
        if ($user->rol_id === 1) {
            return redirect('/admin/home')->withCookie($cookie);
        }
        if ($user->rol_id === 2) {
            return redirect('/cliente/home')->withCookie($cookie);
        }
        return redirect('/prueba')->with('token', $token)->withCookie($cookie);
    }
    public function newlogout()
    {
        auth()->user()->tokens()->delete();
        $cookie = Cookie::forget('cookie_token');
        return redirect('/');
    }
    public function prueba()
    {
        return view('prueba');
    }
}