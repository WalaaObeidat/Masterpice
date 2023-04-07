@section('script')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
@endsection
<!-- header section starts  -->

 <header class="lb">

  {{-- <div id="menu-bar" class="fas fa-bars "></div> --}}
  <a class="logo" href="{{ route('puplicUser.welcome') }}"><img src="img/logo.png" class="hires" width="150" height="80" alt="Free Bootstrap Template by uicookies.com"></a>
  {{-- <a href="#" class="logo"><span>T</span>ravel</a> --}}

  <nav class="navbar">
      <a href="{{ route('puplicUser.welcome') }}">Home</a>
      <a href="{{ route('puplicUser.fields')}}">Designs</a>
      <a href="{{ url('/about') }}">About</a>
      <a href="{{ url('/contact') }}">Contact</a>
  </nav>

  {{-- <div class="icons"> --}}
      {{-- <i class="fas fa-search" id="search-btn"></i> --}}
      {{-- <i class="fas fa-user" id="login-btn"></i> --}}
      <div class="nav-item dropdown" style="color:#ffffff;
      font-size: 2rem;
      margin:0 .8rem;
      padding-left: 20px;
      font-family: 'Times New Roman', Times, serif;">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-user"></i> Username 
     </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="{{ url('/UserProfile') }}"><i class="fa fa-user"></i> Profile</a></li>
    <li><a class="dropdown-item" href="{{ route('puplicUser.register') }}"><i class="fa fa-user-plus"></i></i> Register</a></li>
    <li><a class="dropdown-item" href="{{ route('puplicUser.login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
    <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
  </div>
  

  {{-- <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
  </form> --}}

</header>

<!-- header section ends -->

