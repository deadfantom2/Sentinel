@extends('layouts.master')
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    <span>
                        Article by Valentino
                        <small>
                            <a href="/sentinel/public/accueils/{{ $accueil->id}}/edit">Edit</a>
                        </small>
  
                    </span>

                    <span class="pull-right">
                        {{ $accueil->created_at->diffForHumans()}}
                    </span>
                </div>

                <div class="panel-body">
                {{ $accueil->content}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
