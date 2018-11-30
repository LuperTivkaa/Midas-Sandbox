{{--
<div class="navbar navbar-dark bg-primary shadow-sm">
  <div class="container d-flex justify-content-between">
    <a href="#" class="navbar-brand d-flex align-items-center">
            
            <strong>MIDAS TOUCH </strong>
          </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader"
      aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  </div>
</div> --}}
<nav class="navbar navbar-expand-sm midas-top-bar">
  <div class="container">
    <a href="/" class="navbar-brand">
          <img  height="90"  src="{{asset('images/logo2.png')}}" alt="logo"> 
    </a>
  </div>
</nav>


<nav class="navbar navbar-expand-sm navbar-dark midas-nav-bg">
  <div class="container">
    {{-- <a class="navbar-brand" href="/">
              <img class="midas-logo-styles" src="{{asset('images/logo.svg')}}" alt="logo">
            </a> --}}

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
      aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item midas-active-link">
          <a class="midas-nav" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="midas-nav" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="midas-nav" href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="midas-nav" href="/committee">Steering Committee</a>
        </li>
        <li class="nav-item">
          <a class="midas-nav" href="/board">Board</a>
        </li>
        {{-- LIST THAT DISPLAYS DROP DOWN MENU --}} {{--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
                      Dropdown link
                    </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>