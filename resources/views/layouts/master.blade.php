<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../../favicon.ico">

    <title>Authentification</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

  </head>


  <body>

     @include('layouts.top-menu')
     @yield('content')

  </body>

  <div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="container">
      <div class="navbar-text pull-left">
        Copyright © 2017-2018 BlendedCom, All Rights Reserved.
      </div>
      <div class="navbar-text pull-right">
        Telephone : 01 00 00 00 00
      </div>
    </div>
  </div>

</html>
