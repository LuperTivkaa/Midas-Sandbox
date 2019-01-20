<div class="white">
  <div class="container midas-top-bar">
    <a href="/" class="brand-logo hide-on-small-only show-on-medium-and-up">
          <img  class=" " height="90"  src="{{asset('images/logo2.png')}}" alt="logo"> 
    </a>
    <a href="/" class="brand-logo show-on-small hide-on-med-and-up">
      <img height="30"  src="{{asset('images/logo.png')}}" alt="logo"> 
    </a>
  </div>
</div>
{{-- Drop Down Content --}}
<ul id="dropdown1" class="dropdown-content">
  <li><a href="/products"><i class="material-icons left">shopping_basket</i>Products</a></li>
  <li><a href="/committee"><i class="material-icons left">supervisor_account</i>Exco</a></li>
  <li><a href="/board"><i class="material-icons left">view_stream</i>Board</a></li>
  <li><a href="/press-release"><i class="material-icons left">library_books</i>Press</a></li>
  <li><a href="/gallery"><i class="material-icons left">movie</i>Gallery</a></li>
</ul>
{{-- end drop dropdown content --}}

<nav class="teal acccent-4">
  <div class="container">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="/"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="/about"><i class="material-icons left">history</i>About Us</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons left">view_quilt</i>More<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="/user/login" class="btn-small red accent-3 waves-effect waves-light"><i class="material-icons left">no_encryption</i>User</a></li>
        <li><a href="/staff/login" class="btn-small orange darken-4 waves-effect waves-light"><i class="material-icons left">vpn_lock</i>Staff</a></li>
      </ul>
    </div>
  </div>

</nav>

<ul class="sidenav teal accent-4" id="mobile-demo">
  <li><a href="/"><i class="material-icons left">home</i>Home</a></li>
  <li><a href="/about"><i class="material-icons left">history</i>About Us</a></li>
  <li><a href="/products"><i class="material-icons left">shopping_basket</i>Products</a></li>
  <li><a href="/committee"><i class="material-icons left">supervisor_account</i>Commitee</a></li>
  <li><a href="/board"><i class="material-icons left">view_stream</i>Board</a></li>
  <li><a href="/press-release"><i class="material-icons left">library_books</i>Press</a></li>
  <li><a href="/gallery"><i class="material-icons left">movie</i>Gallery</a></li>
  <li><a href="/user/login"><i class="material-icons left">no_encryption</i>User</a></li>
  <li><a href="/staff/login"><i class="material-icons left">vpn_lock</i>Staff</a></li>
</ul>