<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel Ecommerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item <?php echo $section === "home" ? 'active' : '' ?>">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item <?php echo $section === "product" ? 'active' : '' ?>">
         <a class="nav-link" href="{{ route('a-product') }}">Products</a>
        </li>
        <li class="nav-item <?php echo $section === "categories" ? 'active' : '' ?>">
          <a class="nav-link" href="{{ route('a-categories') }}">Categories</a>
         </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Super Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('customer-logout') }}">Logout</a>
            </div>
        </li>
      </ul>
    </div>
  </nav>