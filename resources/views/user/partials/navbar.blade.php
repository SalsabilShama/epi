
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="logo"><a href="index.html"><img src="{{asset('template/images/logo.png')}}"></a></div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="{{url('/registration')}}">Vaccine Registration</a>
      </li>
      
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="news.html">Download Card</a>
      </li>
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="client.html">Get Certificate</a>
      </li>
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="client.html">FAQ</a>
      </li>
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="client.html">About Us</a>
      </li>
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="#footerSection">Contact Us</a>
      </li>
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="{{route('login')}}">Login</a>
      </li>
      <li class="nav-item">
         <a class="nav-link front_size_decrease" href="medicine.html">Search</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#"><img src="{{asset('template/images/search-icon.png')}}"></a>
      </li>
   </ul>
</div>
</nav>