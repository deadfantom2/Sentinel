<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function tasks()
    {
		return view('managers.tasks');
    }
}
