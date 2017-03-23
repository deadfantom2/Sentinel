<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\NotFoundHttpException ;
use App\Video;
use App\Accueil;
use App\User;
use Auth;
use DB;
use Sentinel;

class AccueilInfoController extends Controller
{
    public function accueilGo()
    {
        try{
            $users = User::all(); //SANS TRASH
            $accueils = Accueil::paginate(10);
            $videos = Video::paginate(10);
            $roles = Role::whereId(2)->first();
            return view('accueils.accueil', compact('users','accueils','videos','roles'));
        }
        catch (NotFoundHttpException  $e)
        {
            return view('errors.404');
        }
    }

    public function index()
    {
        $users = User::paginate(10); //SANS TRASH
        $accueils = Accueil::paginate(10); //SANS TRASH
        return view('accueils.index', compact('users','accueils'));
    }

    public function create()
    {
        return view('accueils.create');
    }

    public function store(Request $request)
    {
        Accueil::create($request->all());
        return redirect('/sentinel/public/accueil');
    }

    public function show($id)
    {
        $accueil = Accueil::findOrFail($id);
        return view('accueils.show',compact('accueil'));
    }

    public function edit($id)
    {
        $accueil = Accueil::findOrFail($id);
        return view('accueils.edit',compact('accueil'));
    }

    public function update(Request $request, $id)
    {
        $accueil = Accueil::findOrFail($id);
        $accueil->update($request->all());
        return redirect('/sentinel/public/accueil');
    }

    public function destroy($id)
    {
        $accueil = Accueil::findOrFail($id);
        $accueil->forceDelete();
        return redirect('/sentinel/public/accueil');
    }
}
