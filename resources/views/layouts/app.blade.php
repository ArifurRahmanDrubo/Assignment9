<!DOCTYPE html>
<html lang="en">
<head>
  <title> Welcome My Personal Portfolio </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Template css Files -->
	<link rel="stylesheet" href="{{ asset('asset/css') }}/style.css" type="text/css">
	<link rel="stylesheet" href="{{ asset('asset/css') }}/skins/pink.css" type="text/css">
<!--	effect start-->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="{{ asset('asset/js') }}/typed.min.js"></script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
	<!--	effect end-->
<!--	 style Switcher-->
  <link rel="stylesheet" class="alternate-style" title="pink" href="{{ asset('asset/css') }}/skins/pink.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="blue" href="{{ asset('asset/css') }}/skins/blue.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="green" href="{{ asset('asset/css') }}/skins/Green.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="orange" href="{{ asset('asset/css') }}/skins/Orange.css" type="text/css" disabled>
  <link rel="stylesheet" class="alternate-style" title="yellow" href="{{ asset('asset/css') }}/skins/Yellow.css" type="text/css" disabled>
  <link rel="stylesheet" href="{{ asset('asset/css') }}/styleSwitcher.css" type="text/css"> 
</head>
<body>
<!--preloader-start-->
@include('components.preloader')
<!--preloader-end-->
<!--  main-container-->
<div class="main-container">
<!--      aside-->
@include('components.sidenav')
<!--      aside end-->
<!--main-content-->
  <div class="main-content">
    @yield('homecontent')
<!--    home-section end-->
<!--   about-section-->
@yield('content')
<!--   about-section end-->
<!--service-section-start-->
       @yield('servicecontent')
<!--service-section-end-->
<!--portfolio-section-start-->
    @yield('portfoliocontent')
<!--portfolio-section-end-->
<!--    blog-section-start-->
      @yield('blogcontent')
<!--    blog-section- end-->
<!--    contact-section-start-->
   @yield('contactcontent')
<!--    contact-section-end-->
  </div>
<!--main-content end-->
  </div>
<!--  main-container end-->
<!--live-style-swicther demo-->
 @include('components.styleswitcher')
<!--live-style-swicther demo end-->
<!-- light-box-->
@include('components.lightbox')
<!-- light-box end-->
<!--template-js-->
<script src="{{ asset('asset/js') }}/script.js"></script>
<!--template-js end-->
<!--live-style-swicther demo start-->
<script src="{{ asset('asset/js') }}/styleSwitcher.js"></script>
<!--live-style-swicther demo end-->
<!-- script-->
 
{{-- <script>
    
    let animate= new Typed('#typing1',{
        strings:["Front End Developer","Back End Developer","Full stack Developer","Wordpress Developer","Web Designer"],
        typeSpeed:100,
        backSpeed:100,
        loop:true,
    })
</script> --}}
<script src="{{ asset('asset/js') }}/tilt.jquery.min.js"></script>

<!-- script end-->
</body>
</html>