<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Happy Book Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href="#">{{ $category->category }}</a></li>  
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Contact') ? 'active' : '' }}"" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>