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
                            <a href="/sentinel/public/roles/{{ $role->id}}/edit">Edit</a>
                        </small>
  
                    </span>

                    <span class="pull-right">
                        {{ $role->created_at->diffForHumans()}}
                    </span>
                </div>

                <div class="panel-body">
                {{ $role->name}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
