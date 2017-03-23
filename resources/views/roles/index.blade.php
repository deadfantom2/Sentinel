@extends('layouts.master')
@section('content')
    <div class="container">
    <div class="row">
    @forelse($roles as $role)
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">  
                    <span>Valentyn</span>

                </div>

                <div class="panel-body">
                    {{  $role->shortContent }}
                    <a href="/sentinel/public/roles/{{ $role->id}}">Read more</a>
                </div>



                <div class="panel-footer clearfix">

                        <form action="/sentinel/public/roles/{{$role->id}}" method="POST" class="pull-right" style="margin-left: 25px">
                            {{ csrf_field()}}
                            {{ method_field('DELETE')}}
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <form action="/sentinel/public/roles/{{ $role->id}}/edit" class="pull-right">
                            {{ method_field('PUT')}}
                            {{ csrf_field() }}
                            <button class="btn btn-success btn-sm">Edit</button>
                        </form>


                </div>
            </div>
        </div>
    @empty
        No roles
    @endforelse



    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{ $roles->links()}}
        </div>
    </div>
    </div>
@endsection