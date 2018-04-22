<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class registrationController extends Controller
{
    public function home(){
        return view ('laouts.home');
    }
    public function register(){
    	return view ('authentications.register');
    }

    public function postregister(Request $request){
        //when auto activate our user
    	$user = Sentinel::registerAndActivate($request->all());

      //When need email activation
        // $user = Sentinel::register($request->all());
        // $activation = Activation::create($user);

    	// //define another roles of user
    	 $role = Sentinel::findRoleById(3);
    	 $role->users()->attach($user);

        // $this->sendEmail($user, $activation->code);
    	 return 'We send an email to confirm your account';
    }

    private function sendEmail($user, $code){
        Mail::send('emails.activation',[
            'user'=>$user,
            'code'=>$code],
            function ($message) use ($user){
                $message->to($user->email);
                $message->subject("Hello $user->first_name,activate your account.");
        });
    }


}
