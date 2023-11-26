@extends('layouts.app')

@section('homecontent')
<section class="home section active" id="home">
    <div class="home-section">
    <!-effect-wrap-->
      <div class="effect-wrap">
          <div class="effect effect-1"></div>
          <div class="effect effect-2">
              <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          </div>
          <div class="effect effect-3"></div>
          <div class="effect effect-4"></div>
          <div class="effect effect-5">
              <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          </div>
      </div>     
      <!-effect-wrap end-->
     <div class="container">
         <div class="row full-screen align-items-center">
              <div class="home-info padd-15">
              <p>Hello</p>
              <h2>I'm Arifur Rahman Drubo</h2>
              <h1>I am a @include('components.typing')</h1>
              <div class="social-link">
                  <a href="https://www.facebook.com/arifurrahman.drubo"><i class="fa fa-facebook"></i></a>
                  <a href="https://github.com/ArifurRahmanDrubo"><i class="fa fa-github"></i></a>
                  <a href="https://www.instagram.com/arifurrahmandrubo"><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
             </div>
           <div class="home-img padd-15">
           <div class="img-box">
              <div id="animation">
              <script>     
        var animation = lottie.loadAnimation({
            container: document.getElementById('animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('asset/loti.json') }}', // Adjust the path based on the location of your JSON file
        });
       
              </script>
              
              </div>
             
            </div>
         </div>           
       </div>
     </div>
     </div>
</section>
@endsection
