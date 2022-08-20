<?php

namespace App\Http\Controllers\Auth;

use App\Models\users;
use App\Models\servicios;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
 

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
      //  $this->middleware('guest')->except('logout');
    //}


    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('getLogout');
    }

    public function getLogin()
    {
        return view("login");
    }

   
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
        ]);
        $servicios = servicios::where('status',1)->orderBy('nombre_servicio')->get();
        $credentials = $request->only('username','password');
        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            $usuarioactual = \Auth::user();
            return view("Servicios.index")->with("usuarioactual", $usuarioactual)
                                 ->with('servicios',$servicios);
        }

        return view("mensajes.error_acceso")->with("msj", "Usuario o contraseña incorrectas.");
    }


     
    public function getLogout()
    {
    

    $this->auth->logout();

    
    Session::flush();


        return redirect("/");
    }

    public function getRegister()
    {
        return view("register");
    }
    public function postRegister(Request $request){
        $data = $request->all();
        users::create([

       
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'edad' => $data['edad'],
            'username' => $data['username'],       
            'password' => Hash::make($data['password']),
            'status' => 1,
        ]);
        return redirect("loginss");
    }


    

}
