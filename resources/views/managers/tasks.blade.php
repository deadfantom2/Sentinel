tasks blade php managers
 <form action="/sentinel/public/logout" method="POST" id="logout-form">
        {{ csrf_field() }}
        <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
</form> 