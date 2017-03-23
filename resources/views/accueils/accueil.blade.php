@extends('layouts.master')


<div class="jumbotron" >
  <h1>BlendedCom</h1>
  <p>Support YLearning</p>
</div>

@section('content')

<hr>

<div class="container">







  @foreach($users as $user)
  @foreach($accueils as $accueil)

     <h2>
         {{$accueil->titre}}
     </h2>

        <div class="panel panel-default">
            <div class="panel-heading">
                <img src="css/erik.jpg" class="img-circle" style="width:60px">
                Publié par :
                {{$user->first_name}}
            </div>

            <div class="panel-body">
                <h4>
                {{$accueil->content}}
                </h4>
            </div>
        </div>


  @endforeach
  @endforeach

        <br>
        <hr>


</div>




@endsection