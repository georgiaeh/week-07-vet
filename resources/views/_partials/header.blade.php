<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">Home</a>
    <a class="navbar-brand" href="/">Services</a>
    <a class="navbar-brand" href="/owners">Owners</a>
    <a class="navbar-brand" href="/animals">Pets</a>
</nav>
<div class="bg-light">
@if(Auth::user())
        <p class="navbar-brand">Logged in as: <a href="/users/{{ Auth::user()->id }}">{{Auth::user()->name}}</a></p> 
    @else
        <p class="navbar-brand"> Not logged in </p>
    @endif
   
    <a href="{{ url('/logout') }}" class="btn btn-primary"> Logout </a>
</div>