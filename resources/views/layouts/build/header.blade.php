<nav class="navbar navbar-expand-lg bg-primary mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('contact.index') }}">Contact Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('contact.index') }}">Contact List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact.create') }}">Add Contact</a>
        </li>
      </ul>
      @if (Auth::check())
        <div class="d-flex px-5" role="search">
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </div>
        </div>
      @endif
    </div>
  </div>
</nav>