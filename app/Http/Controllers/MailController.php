<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {



   public function html_email() {
      $data = array('name'=>"Virat Gandhi");

      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Basic Email Sent. Check your inbox.";
   }



        public function  basic_email() {

            $email = Auth::user()->email;
            $fname = Auth::user()->fname;
            $lname = Auth::user()->lname;
            $role = Auth::user()->role;


                // email data
                $email_data = array(
                'fname' => $fname,
                'lname' => $lname,
                'email' => $email,
                );


                if($role == "Enterprise Rep"){
                Mail::send('emails.er', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['fname'], $email_data['lname'])
                ->subject('NASDEP ENTERPRISE FORM')
                ->from('info@nasdep.com', 'NASDEP');
                });
                return view('emails.verification_form');
                }

            //   $data = array('name'=>"Virat Gandhi");
            //   Mail::send('mail', $data, function($message) {
            //      $message->to('abc@gmail.com', 'Tutorials Point')->subject
            //         ('Laravel HTML Testing Mail');
            //      $message->from('xyz@gmail.com','Virat Gandhi');
            //   });
            //   echo "HTML Email Sent. Check your inbox.";
        }



   public function attachment_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
