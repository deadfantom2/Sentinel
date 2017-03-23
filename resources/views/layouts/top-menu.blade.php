<div class="container">
<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" ><img src="css/erik.jpg" ></a>
            <a class="navbar-brand" href="#">Ydays</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active" role="presentation"><a href="/sentinel/public/accueil">Accueil</a></li>
          <li class="active" role="presentation"><a href="/sentinel/public/accueils">Create Accueils</a></li>
            <li class="active" role="presentation"><a href="/sentinel/public/earnings">Admin</a></li>
            <li class="active" role="presentation"><a href="/sentinel/public/videos/create">video create</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(Sentinel::check())
                @if(Sentinel::getUser()->roles()->first()->slug=='admin')
                    <form action="/sentinel/public/logout" method="POST" id="logout-form">
                        {{ csrf_field() }}
                        <ul class="nav navbar-nav navbar-right">
                              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                       <li>
                                          <a href="/sentinel/public/accueils">Accueils Info</a>
                                       </li>
                                       <li>
                                          <a href="/sentinel/public/profile/{{ Sentinel::getUser()->email}}">Profile</a>
                                       </li>
                                        <hr>
                                        <li>
                                            <a href="/sentinel/public/accueils/create">Create Accueil Info</a>
                                        </li>
                                        <li>
                                            <a href="/sentinel/public/accueils">Voir Info</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="/sentinel/public/videos/create">Create Video</a>
                                        </li>
                                        <li>
                                            <a href="/sentinel/public/videos">Voir videos</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="/sentinel/public/categories/create">Create categorie</a>
                                        </li>
                                        <li>
                                            <a href="/sentinel/public/categories">Voir categories</a>
                                        </li>
                                    </ul>
                              </li>
                              <li role="presentation"><a href="">Activavtion : <span class="badge"> 7</span></a> </li>
                              <li role="presentation"><a href="#" onclick="document.getElementById('logout-form').submit()">Log out</a></li>
                        </ul>                        
                    </form>
                    @elseif(Sentinel::getUser()->roles()->first()->slug=='aboUsers')
                    {{ csrf_field() }}
                    <form action="/sentinel/public/logout" method="POST" id="logout-form">
                        {{ csrf_field() }}
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/sentinel/public/profile/{{ Sentinel::getUser()->email}}">Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li role="presentation"><a href="">Activavtion : <span class="badge"> 7</span></a> </li>
                            <li role="presentation"><a href="#" onclick="document.getElementById('logout-form').submit()">Log out</a></li>
                        </ul>
                    </form>

                @endif
            @else
                <li role="presentation"><a href="/sentinel/public/login">Login</a></li>
                <li role="presentation"><a href="/sentinel/public/register">Register</a></li>

            @endif
        </ul>
    </div>
</nav>


<h3 class="text-muted">
@if(Sentinel::check())
    Hello, {{ Sentinel::getUser()->first_name}}
@else
    Authentifications
@endif
</h3>
</div>
