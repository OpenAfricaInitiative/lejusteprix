<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Bestmomo\LaravelEmailConfirmation\Traits\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
   protected function redirectTo()
    {
        flashy('Bienvenue '.Auth::user()->username.' sur le Juste Prix');
        return '/';
    }  

 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function username(){
    return 'log';
}
 protected function credentials(Request $request)
    {
        $logValue = $request->input($this->username());
        $logKey = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        return [
            $logKey => $logValue,
            'password' => $request->input('password'),
        ];


    }
}
