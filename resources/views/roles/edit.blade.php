@extends('layouts.master')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> Edit role </div>

                <div class="panel-body">
                    <form action="/sentinel/public/roles/{{ $role->id}}" method="POST" name="form">
                    {{ method_field('PUT')}}
                    {{ csrf_field() }}

                        <div class="form-group" >
                            <label for="name">name</label>
                            <textarea name="name" class="form-control">{{ $role->name}}</textarea>
                        </div>

                        <div class="form-group" >
                            <label for="slug">slug</label>
                            <textarea name="slug" class="form-control">{{ $role->slug}}</textarea>
                        </div>


                        <input type="submit" class="btn btn-success pull-right">   
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
