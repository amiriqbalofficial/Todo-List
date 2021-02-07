<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('create') ? 'active' :''}}" href="{{route('create')}}">Contact</a>
      </li>
  </div>
      </li>

  </div>
</nav>
