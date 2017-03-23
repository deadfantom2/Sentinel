<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Role;
use App\Video;
use Illuminate\Http\Request;
use App\Article;
use App\User;

use Auth;
use DB;
use Sentinel;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categorie::paginate(10);
        $users = User::paginate(10);
        $videos = Video::paginate(10);
        return view('categories.index', compact('users','videos','categories'));
    }


    public function create()
    {
        $roles = Role::paginate(10); //SANS TRASH
        return view('categories.create', compact('roles'));
    }

    public function store(Request $request)
    {
       Categorie::create($request->all());
       return redirect('/sentinel/public/categories');
    }

    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('categories.show',compact('categorie'));
    }

    public function edit($id)
    {
        $roles = Role::paginate(10); //SANS TRASH
        $categorie = Categorie::findOrFail($id);
        return view('categories.edit',compact('categorie','roles'));
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->update($request->all());
        return redirect('/sentinel/public/categories');
    }


    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->forceDelete();
        return redirect('/sentinel/public/categories');
    }
}
