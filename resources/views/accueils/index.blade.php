@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
        @forelse($accueils as $accueil)
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Valentyn</span>
                        <span class="pull-right">{{ $accueil->created_at->diffForHumans() }}</span>
                    </div>

                    <div class="panel-body">
                        {{  $accueil->shortContent }}
                        <a href="/sentinel/public/accueils/{{ $accueil->id}}">Read more</a>
                    </div>



                    <div class="panel-footer clearfix">
                    @if($accueil->user_id == Sentinel::getUser()->id)
                            <form action="/sentinel/public/accueils/{{$accueil->id}}" method="POST" class="pull-right" style="margin-left: 25px">
                                {{ csrf_field()}}
                                {{ method_field('DELETE')}}
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>

                               userid <input type="" name="user_id" value="{{ Sentinel::getUser()->id}}">  <hr>


                            <form action="/sentinel/public/accueils/{{ $accueil->id}}/edit" class="pull-right">
                                {{ method_field('PUT')}}
                                {{ csrf_field() }}
                                <button class="btn btn-success btn-sm">Edit</button>
                            </form>
                    @endif

                    </div>
                </div>
            </div>
        @empty
        <h1>Rien dans la base de données</h1>
        @endforelse

        </div>


        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {{ $accueils->links()}}
            </div>
        </div>
    </div>
@endsection