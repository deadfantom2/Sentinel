@extends('layouts.master')

<style type="text/css">
    .profile-img{
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0,0,0,0.3);
    }
</style>
@section('content')
    <div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img class="profile-img" src="https://spideoseries.files.wordpress.com/2013/11/cartman-2.jpg">

                <h1>{{ $user->email }}</h1>
                <h3>{{ $user->first_name }}</h3>
                <h5>{{ $user->email }}</h5>

                <button class="btn btn-success">Follow</button>
 
            </div>
        </div>
    </div>
</div>
    </div>



@endsection
