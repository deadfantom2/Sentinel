<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException ;

class LoginController extends Controller
{
    public function login()
    {
    	return view('authentication.login');
    }


    public function postLogin(Request $request)
    {
    try 
    {
        $rememberMe = false;
        if(isset($request->remember_me))
            $rememberMe = true;
        if(Sentinel::authenticate($request->all(), $rememberMe))
        {
            $slug = Sentinel::getUser()->roles()->first()->slug;
            if($slug == 'admin')
                return redirect('/sentinel/public/earnings');
            elseif($slug == 'manager')
                return redirect('/sentinel/public/tasks');
            elseif($slug == 'aboUsers')
                return redirect('/sentinel/public/abo');
            elseif($slug == 'freeUsers')
                return redirect('/sentinel/public/free');
        }
        else
        {
            return redirect()->back()->with(['error' => 'wrong data']);
        }  
    } 
    catch (ThrottlingException $e) 
    {
        $delay = $e->getDelay();
        return redirect()->back()->with(['error' => "Vous etes banned pour $delay seconds"]);
    }
    catch (NotActivatedException $e) 
    {
        return redirect()->back()->with(['error' => "Votre compte n'est pas activé"]);
    }	

       


    }

    public function logout()
    {
    	Sentinel::logout();
    	return redirect('/sentinel/public/login');
    }
}
