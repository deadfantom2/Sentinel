@extends('layouts.master')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-6-col-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Forgot Password</h3>
                </div>

                <div class="panel-body">
                   <form action="/sentinel/public/forgot-password" method="POST">
                       {{ csrf_field() }}

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success')}}
                        </div>
                    @endif

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="example@example.com" required="">
                            </div> 
                        </div>



                        <div class="form-group">
                                <input type="submit" value="Send Code" class="btn btn-success pull-right" >
                        </div>

                   </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection

