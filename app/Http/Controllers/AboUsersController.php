<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Role;
use App\Video;
use Sentinel;

class AboUsersController extends Controller
{
    public function aboU()
    {
        $videos = Video::whereRole_id(2)->get();
        $categories = Categorie::paginate(100);
        $roles = Role::paginate(4);
        return view('abousers.abo', compact('videos','categories','roles'));
    }
}
