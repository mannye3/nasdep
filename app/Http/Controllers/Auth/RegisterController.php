<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Models\State;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'country_id' => 'required|string|max:255',
            'state_id' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'min:12', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        $user = User::create([
                   'fname' => $data['fname'],
                   'lname' => $data['lname'],
                   'gender' => $data['gender'],
                   'country_id' => $data['country_id'],
                   'state_id' => $data['state_id'],
                   'type' => $data['type'],
                   'email' => $data['email'],
                   'password' => Hash::make($data['password']),
                    'phone'=> $data['phone']
               ]);

        // email data
        $email_data = array(
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
        );


        if($data['role'] == "Enterprise Rep"){
            Mail::send('emails.er', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['fname'], $email_data['lname'])
                    ->subject('NASDEP ENTERPRISE FORM')
                    ->from('info@nasdep.com', 'NASDEP');
            });
            }


            if($data['role'] == "Investor Rep"){
                Mail::send('emails.ir', $email_data, function ($message) use ($email_data) {
                    $message->to($email_data['email'], $email_data['fname'], $email_data['lname'])
                        ->subject('NASDEP Investor FORM')
                        ->from('info@nasdep.com', 'NASDEP');
                });
                }

                if($data['role'] == "Accredited Investor"){
                    Mail::send('emails.ai', $email_data, function ($message) use ($email_data) {
                        $message->to($email_data['email'], $email_data['fname'], $email_data['lname'])
                            ->subject('NASDEP Accredited Investor FORM')
                            ->from('info@nasdep.com', 'NASDEP');
                    });
                    }

                    if($data['role'] == "Incubator"){
                        Mail::send('emails.ic', $email_data, function ($message) use ($email_data) {
                            $message->to($email_data['email'], $email_data['fname'], $email_data['lname'])
                                ->subject('NASDEP Incubator FORM')
                                ->from('info@nasdep.com', 'NASDEP');
                        });
                        }





        // send email with the template


        return $user;
    }


}
