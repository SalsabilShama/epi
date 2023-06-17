<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>@yield('title')</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="{{asset('template/images/fevicon.png')}}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('template/css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
   @include('user.partials.navbar')
   </div>
   <!-- header section end -->
   @yield('main')
   @include('user.partials.footer')
   <!-- Javascript files-->
   <script src="{{asset('template/js/jquery.min.js')}}"></script>
   <script src="{{asset('template/js/popper.min.js')}}"></script>
   <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('template/js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{asset('template/js/plugin.js')}}"></script>
   <!-- sidebar -->
   <script src="{{asset('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('template/js/custom.js')}}"></script>
   <!-- javascript -->
   <script src="{{asset('template/js/owl.carousel.js')}}"></script>
 <!--   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->
</body>

</html>