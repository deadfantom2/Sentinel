@extends('layouts.master')
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    <span>
                        Créer par Administrateur
                        <small>
                            <a href="/sentinel/public/videos/{{ $video->id}}/edit">Edit</a>
                        </small>
  
                    </span>

                    <span class="pull-right">
                        {{ $video->created_at->diffForHumans()}}
                    </span>
                </div>

                <div class="panel-body">
                {{ $video->content}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
