@extends('layouts.master')
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> Create info sur accueil </div>

                <div class="panel-body">
                    <form action="/sentinel/public/accueils" method="POST">
                        {{ csrf_field() }} 

                        userid<input type="" name="user_id" value="{{ Sentinel::getUser()->id}}">

                        <div class="form-group" >
                            <label for="titre">Titre</label>
                            <textarea name="titre" class="form-control"></textarea>
                        </div>

                        <div class="form-group" >
                            <label for="auteur">Auteur</label>
                            <textarea name="auteur" class="form-control"></textarea>
                        </div>

                        <div class="form-group" >
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>

                        <input type="submit" class="btn btn-success pull-right">   
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
