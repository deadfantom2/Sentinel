<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Role;
use App\Video;
use Cartalyst\Sentinel\Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Http\Request;
use App\User;

use Auth;
use DB;


class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10); //SANS TRASH
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $roles = Role::paginate(10); //SANS TRASH
        return view('roles.create', compact('roles'));
    }

    public function store(Request $request)
    {
       Role::create($request->all());
       return redirect('/sentinel/public/roles');
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show',compact('role'));
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit',compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());
        return redirect('/sentinel/public/roles');
    }


    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->forceDelete();
        return redirect('/sentinel/public/roles');
    }
}
