<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Role;
use App\Video;
use Sentinel;
use DB;

class AdminController extends Controller
{
    public function earnings()
    {
        try{
            $videos = Video::paginate(500);
            $categories = Categorie::paginate(500);
            $roles = Role::paginate(4); //SANS TRASH
            return view('admins.earnings', compact('videos','categories','roles'));
        }
        catch (NotFoundHttpException  $e)
        {
            return view('errors.404');
        }



    }
}
