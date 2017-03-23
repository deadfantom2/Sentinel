<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class FreeUsersController extends Controller
{
    public function freeU()
    {
    	return view('freeusers.free');
    }
}
