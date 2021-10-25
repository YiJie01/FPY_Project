<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    public $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //(in_array(request()->email, ['user01@hotmail.com', 'zxxx'])) if have many people use it
        if(request()->email == 'wongyijie2000@hotmail.com')
        {
            $this->redirectTo = RouteServiceProvider::ADMIN_HOME;
        }
        else
        {
            $this->redirectTo = RouteServiceProvider::HOME;
        }

        $this->middleware('guest')->except('logout');
    }
}
