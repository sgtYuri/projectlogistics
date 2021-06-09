<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logistics</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="/supplier" class=" text-black nav-link  @if($active=='supplier') active @endif">
            Supplier </a>
          </li>
        <li class="nav-item">
          <a href="/storage" class=" text-black nav-link  @if($active=='storage') active @endif">
            Storage </a>
        </li>
        <li class="nav-item">
          <a href="/assets" class=" text-black nav-link  @if($active=='assets') active @endif">
            Assets </a>
        </li>
        <li class="nav-item">
          <a href="/distribution" class=" text-black nav-link  @if($active=='distribution') active @endif">
            Distribution </a>
        </li>
          <li class="nav-item">
            <a href="/transportation" class=" text-black nav-link  @if($active=='transportation') active @endif">
              Transportation </a>
          </li>
          <li class="nav-item">
            <a href="/delivery" class=" text-black nav-link  @if($active=='delivery') active @endif">
              Dileveries </a>
          </li>
          <li class="nav-item">
            <a href="/return" class=" text-black nav-link  @if($active=='return') active @endif">
              Returns </a>
          </li>
        </ul>
        <nav>
        <a href="/app.logout" class=" text-white d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://variety.com/wp-content/uploads/2014/11/stand-by-me-doraemon.jpg?w=681&h=383&crop=1" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>Yhuri</strong>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="{{ URL::route('app.logout') }}">Sign out</a></li>
      </ul>
    </a>
      </div>
  </nav>