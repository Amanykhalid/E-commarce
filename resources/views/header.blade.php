<?php
    use App\Http\Controllers\ProductController;
    if (Session::has('user'))
    {
      $total=ProductController::carditem();
    }
    else
    {
      $total=0;
    }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        
      </ul>
      <form action="/search" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a href="#" class="nav-link">Card Item ({{$total}})</a>
          </li>
          @if (Session::has('user'))  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Session::get('user')['name']}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/logout">LogOut</a>
            </div>
          </li>
          @else 
           <a href="/login">Login</a>
          @endif
        
      </ul>
    </div>
  </nav>