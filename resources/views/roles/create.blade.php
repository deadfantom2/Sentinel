@extends('layouts.master')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> Create role </div>

                <div class="panel-body">
                    <form action="/sentinel/public/roles" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group" >
                            <label for="name">name</label>
                            <textarea name="name" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="slug">slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>


                        <input type="submit" class="btn btn-success pull-right">   
                    </form>

                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
