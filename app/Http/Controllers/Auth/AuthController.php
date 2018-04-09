<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |-------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

     use  ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
  public function username(){
        return "log";
    }

    
    public function getLogin(){
    	return view('auth.login');
    }
   
     public function getRegister(){
        return view('auth.register');
    }
    /**
     * @return [string]
     */
    public function getLogout(){
        Auth::logout();
         flashy("Vous etes deconnecté");
        return redirect('/');
    }
/**
 * @param  LoginRequest
 * @return [string]
 */
public function postLogin(LoginFormRequest $request)
{
   
    $logValue = $request->log;
     $logAccess = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
   

    $credentials = [
        $logAccess  => $logValue, 
       'password'  => $request->password
     ];
        $remember=$request->remember;
            if (Auth::attempt($credentials, $remember)) {
            flashy("Bienvenue sur LE JUSTE PRIX");

            // Authentication passed...
            return redirect('/');


    }else{
        flashy()->error('Identification ou Mot de passe incorrect');
        return redirect()->back();
    }
}
  /**
   * @param  RegisterRequest
   * @return [string]
   */
public function postRegister(RegisterFormRequest $request){
     User::create([
            'name' => $request->name,
            'username' => $request->username,
            'city' => $request->city,
            'email' => $request->email,
            'password' => bcrypt($request->password),
         
        ]);
  
    flashy("Felicitations votre inscription s'est effectuée avec success");
   return redirect()->route('connexion');

}
}

