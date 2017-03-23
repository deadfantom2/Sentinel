@extends('layouts.master')
@section('content')


<div class="container-fluid">
    <div class="row content">


        <div class="col-sm-2 sidenav">
            <h4>Admin Panel</h4><hr>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1"><h5>Home</h5></a></li>
                <li class="active"><a href="/sentinel/public/accueils/create"><h5>Créer une Info sur la Page Accueil</h5></a></li>
                <li class="active"><a href="/sentinel/public/categories/create"><h5>Créer une Catégorie</h5></a></li>
                <li class="active"><a href="/sentinel/public/categories"><h5>Supprimer une Catégorie</h5></a></li>
                <li class="active"><a href="/sentinel/public/videos/create"><h5>Créer une Vidéo</h5></a></li>

            </ul><br>
        </div>

        <div class="col-sm-9">
            @foreach($categories as $categorie)
            <div class="row col-sm-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        {{$categorie->titre}}
                        <form action="/sentinel/public/categories/{{ $categorie->id}}/edit" class="pull-right">
                            {{ method_field('PUT')}}
                            {{ csrf_field() }}
                            <button><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:blue;">Modifier</span></button>
                        </form>
                    </div>


                    <div class="card-action">
                        <div id="accordion">
                            <div id="headingZero" >
                                <a href="#{{ $categorie->id}}" data-toggle="collapse" style="color: #41bcff;">
                                    Voir les vidéos <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
                                </a>
                            </div>
                            <div id="{{ $categorie->id}}" class="panel-collapse collapse">


                                <div class="panel-body">
                                    <table class="table">

                                        @foreach($videos as $video)
                                            @if($categorie->id == $video->categorie_id)
                                                <div class="col-sm-4">
                                                    <div class="card">

                                                        <div class="card-image">
                                                            <iframe width="360" height="200" src="{{ $video->content}}" frameborder="0" allowfullscreen></iframe>
                                                        </div>

                                                        <div class="panel-body">
                                                            <h5 style="color: #4b47ff;">Titre : {{ $video->titre}}</h5>
                                                        </div>


                                                        <div class="card-action">
                                                            <a href="#" target="new_blank">
                                                                @if(($video->user_id == Sentinel::getUser()->id))
                                                                    <form action="/sentinel/public/videos/{{$video->id}}" method="POST" class="pull-right" style="margin-left: 25px">
                                                                        {{ csrf_field()}}
                                                                        {{ method_field('DELETE')}}
                                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                                    </form>

                                                                    <form action="/sentinel/public/videos/{{ $video->id}}/edit" class="pull-right">
                                                                        {{ method_field('PUT')}}
                                                                        {{ csrf_field() }}
                                                                        <button class="btn btn-success btn-sm">Edit</button>
                                                                    </form>
                                                                @endif
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>

@endsection