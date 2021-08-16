<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\UserRequest;

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
       protected $redirectTo ='/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


/**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request)
    {
        // $user_requests = UserRequest::all();

        if(Auth::check() == true || Auth::user()->role == "Enterprise Rep")
        {
            return redirect('/enterprise/dashboard');
        }



        if(Auth::check() == true || Auth::user()->role == "Investor Rep")
        {

            return redirect('/investor/dashboard');



        }




        if(Auth::check() == false || Auth::user()->role == "Accredited Investor")
        {
            return redirect('/accredited_investor/dashboard');
        }




        if(Auth::check() == false || Auth::user()->role == "Incubator")
        {
            return redirect('/incubator/dashboard');
        }
    }


}




