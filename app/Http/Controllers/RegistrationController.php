<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Sentinel;
use Activation;
use App\User;
Use Mail;

class RegistrationController extends Controller
{
    public function register()
    {
    	return view('authentication.register');
    }

    public function postRegister(Request $request)
    {
    	$user = Sentinel::register($request->all());   //registerAndActivate-compte est activé=1, register-compte n'est pas activé=0
    	$activation = Activation::create($user);

        if (isset($_POST['admin']))
        {
            $role = Sentinel::findRoleBySlug('admin');
        }
        elseif (isset($_POST['manager']))
        {
            $role = Sentinel::findRoleBySlug('manager');
        }
        elseif (isset($_POST['abo']))
        {
            $role = Sentinel::findRoleBySlug('aboUsers');
        }
        elseif (isset($_POST['free']))
        {
            $role = Sentinel::findRoleBySlug('freeUsers');
        }

    	$role->users()->attach($user);
		$this->sendEmail($user, $activation->code);
    	return redirect('/sentinel/public/login');
    }




    private function sendEmail($user, $code)
    {

//  <a href="{{ env('APP_URL') }}/activate/{{ $user->email }}/{{ $code }}">activate account</a>
    	Mail::send('emails.activation', [
    		'user' => $user, 
    		'code' => $code
    		], function($message) use ($user) { 
    			$message->to($user->email);
    			$message->subject("Bonjour $user->first_name, activez votre compte.");

    		});
    }
}
