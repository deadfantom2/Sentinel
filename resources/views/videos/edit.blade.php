@extends('layouts.master')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> Edit video </div>

                <div class="panel-body">
                    <form action="/sentinel/public/videos/{{ $video->id}}" method="POST" name="form">
                    {{ method_field('PUT')}}
                    {{ csrf_field() }}


                        Utilisateurs :
                        <select name="role_id"/>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" name="role_id">
                                {{$role->slug}}
                            </option>
                        @endforeach
                        </select>

                        <br><br>Catégories
                        <select name="categorie_id" >
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}" name="categorie_id" >
                                {{$categorie->titre}}
                            </option>
                        @endforeach
                        </select>

                            @if ( !empty($_POST['test'])) { echo 'test'; // ou ce que tu veut}
                            @endif

                        <hr>


                        <div class="form-group" >
                            <label for="titre">Titre</label>
                            <textarea name="titre" class="form-control">{{ $video->titre}}</textarea>
                        </div>

                        <div class="form-group" >
                            <label for="details">Details</label>
                            <textarea name="details" class="form-control">{{ $video->details}}</textarea>
                        </div>

                        <div class="form-group" >
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control">{{ $video->content}}</textarea>
                        </div>

                        <input type="submit" class="btn btn-success pull-right">   
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
