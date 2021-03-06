@extends('layouts.master')
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> Create categorie </div>

                <div class="panel-body">
                    <form action="/sentinel/public/categories" method="POST">
                        {{ csrf_field() }} 

                        <input type="hidden" name="user_id" value="{{ Sentinel::getUser()->id}}">


                        Utilisateurs :
                        <select name="role_id"/>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" name="role_id">
                                {{$role->slug}}
                            </option>
                        @endforeach
                        </select>

                        <hr>

                        <div class="form-group" >
                            <label for="titre">Titre</label>
                            <textarea name="titre" class="form-control"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" name="content" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-success pull-right">   
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
