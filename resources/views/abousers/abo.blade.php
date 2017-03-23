@extends('layouts.master')
@section('content')
<div class="container">
<h1>Hello tu est sur la paga ABONEMENT!!!!!</h1>  <br>


    @foreach($categories as $categorie)
    @if($categorie->role_id == 2)
    <div class="panel panel-primary">
        <div class="panel-heading">{{ $categorie->titre }}</div>
        <div class="panel-body">

            <div class="row">
                <!-- Card Projects -->
                @foreach($videos as $video)
                    @if(($categorie->id == $video->categorie_id) && ($categorie->role_id == $video->role_id))
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-image">
                                <iframe width="380" height="200" src="{{ $video->content}}" frameborder="0" allowfullscreen></iframe>
                            </div>

                            <div class="panel-body">
                                {{ $video->titre}}
                            </div>

                            <div class="card-action">

                                <div id="accordion">
                                    <div id="headingZero" >
                                        <a href="#{{ $video->id}}" data-toggle="collapse" style="color: #ff8000;">
                                            Info sur le module <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                    <div id="{{ $video->id}}" class="panel-collapse collapse">
                                        <hr>{{ $video->details}}
                                    </div>
                                </div>

                            </div>

                            <div class="card-action">
                                <a href="#" target="new_blank">QCM Test</a>
                            </div>

                        </div>
                    </div>
                @endif
                @endforeach
            </div>

        </div>
    </div>
    @endif
    @endforeach



</div>
@endsection

