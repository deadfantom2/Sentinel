<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Sentinel;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
    	return view('authentication.forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
    	$user = User::whereEmail($request->email)->first();


    	if(count($user) == 0)
    		return redirect()->back()->with(['success' => 'Le code modifiant le mot de passe était envoyer sur votre mail']);

    		$reminder = Reminder::exists($user) ?: Reminder::create($user);

    		$this->sendEmail($user, $reminder->code);

    		return redirect()->back()->with(['success' => 'Le code modifiant le mot de passe était envoyer sur votre mail']);
    	
    }

    public function resetPassword($email, $resetCode)
    {
    	$user = User::byEmail($email); //user.php meyhoe creer

    	if(count($user) == 0)
    		abort(404);

    	if($reminder = Reminder::exists($user))
    	{
			//si le code reset est bon yes
    		if($resetCode == $reminder->code)
    		return view('authentication.reset-password');
    	else
 			//si le code reset est mauvais non
    		return redirect('/sentinel/public/');
    	}
    	else
    	{
    		return redirect('/sentinel/public/');
    	}
    }


    public function postResetPassword(Request $request, $email, $resetCode)
    {
    	$this->validate($request, [
    		'password' => 'confirmed|required|min:4|max:10',
    		'password_confirmation' => 'required|min:4|max:10'
    		]);

		$user = User::byEmail($email); //user.php meyhoe creer
    	if(count($user) == 0)
    		abort(404);

    	if($reminder = Reminder::exists($user))
    	{
			//si le code reset est bon yes
    		if($resetCode == $reminder->code)
    		{
    			Reminder::complete($user, $resetCode, $request->password);
    			return redirect('/sentinel/public/login')->with('success','Authentifier aveec votre nouveau mot de passe');
    		}
    	else
 			//si le code reset est mauvais non
    		return redirect('/sentinel/public/');
    	}
    	else
    	{
    		return redirect('/sentinel/public/');
    	}
    }

    private function sendEmail($user, $code)
    {
    	Mail::send('emails.forgot-password', [
    		'user' => $user,
    		'code' => $code
    		], function ($message) use ($user){
    			$message->to($user->email);
    			$message->subject("Hello $user->first_name,reset your password");
    		});
    }
}
