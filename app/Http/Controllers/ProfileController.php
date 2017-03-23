<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //ajouter
use App\Magasin; //ajouter

class ProfileController extends Controller
{
    public function profile($aa)
    {
    	$user = User::whereEmail($aa)->first();
    	return view('user.profile', compact('user'));
    }



}
