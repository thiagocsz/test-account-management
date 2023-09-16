<nav class="navbar navbar-expand-lg bg-primary mb-5" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            Contact Management
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('contact.index') }}">Contact List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact.create') }}">Add Contact</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>