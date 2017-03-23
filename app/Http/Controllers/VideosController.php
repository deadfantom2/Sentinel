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


class VideosController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); //SANS TRASH
        $videos = Video::paginate(10);
        $categories = Categorie::paginate(10); //SANS TRASH
        return view('videos.index', compact('users','videos','categories'));
    }

    public function create()
    {
        $users = User::paginate(10); //SANS TRASH
        $categories = Categorie::paginate(10); //SANS TRASH
        $roles = Role::paginate(10); //SANS TRASH
        return view('videos.create', compact('categories','users','roles'));
    }

    public function store(Request $request)
    {
       Video::create($request->all());
       return redirect('/sentinel/public/videos');
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.show',compact('video'));
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        $categories = Categorie::paginate(10); //SANS TRASH
        $roles = Role::paginate(10); //SANS TRASH
        return view('videos.edit',compact('video','categories','roles'));
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        return redirect('/sentinel/public/videos');
    }


    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->forceDelete();
        return redirect('/sentinel/public/videos');
    }
}
