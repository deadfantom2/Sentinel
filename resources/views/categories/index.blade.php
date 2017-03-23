@extends('layouts.master')
@section('content')
    <div class="container">
    <div class="row">
    @forelse($categories as $categorie)
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">  
                    <span>Créer par Administrateur</span>
                    <span class="pull-right">{{ $categorie->created_at->diffForHumans() }}</span>
                </div>

                <div class="panel-body">
                    {{  $categorie->shortContent }}
                    <a href="/sentinel/public/categories/{{ $categorie->id}}">Read more</a>
                </div>

                <div class="panel-footer clearfix">
                        <form action="/sentinel/public/categories/{{$categorie->id}}" method="POST" class="pull-right" style="margin-left: 25px">
                            {{ csrf_field()}}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <form action="/sentinel/public/categories/{{ $categorie->id}}/edit" class="pull-right">
                            {{ method_field('PUT')}}
                            {{ csrf_field() }}
                            <button class="btn btn-success btn-sm">Edit</button>
                        </form>

                </div>
            </div>
        </div>
    @empty
    <h1>Rien dans la base de données</h1>
    @endforelse



    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{ $categories->links()}}
        </div>
    </div>
    </div>

@endsection