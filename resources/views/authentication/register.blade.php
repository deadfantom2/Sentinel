@extends('layouts.master')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-sm-6 center-block" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Register</h3>
                </div>

                <div class="panel-body">
                   <form action="/sentinel/public/register" method="POST">
                       {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="example@example.com">
                            </div> 
                        </div>


                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div> 
                        </div>


                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <input type="text" name="location" class="form-control" placeholder="Location">
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                            </div> 
                        </div>

                        <p><input type="checkbox" name="admin" value="ON"> Admin-1</p>
                        <p><input type="checkbox" name="manager" value="ON"> Manager-2</p>
                        <p><input type="checkbox" name="abo" value="ON"> Abo-3</p>
                        <p><input type="checkbox" name="free" value="ON"> Free-4</p>

                        <div class="form-group">
                                <input type="submit" value="Register" class="btn btn-success pull-right" >
                        </div>

                   </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection