<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Activation;
use Sentinel;

class ActivationController extends Controller
{
    public function activate($email, $activationCode)
    {
        /*Activation en ligne de commande dans le navigateur*/
    	$user = User::whereEmail($email)->first();


    	if(Activation::complete($user, $activationCode))
    	{
    		return redirect('/sentinel/public/login');
    	}
    	else
    	{

    	}

    }
}
