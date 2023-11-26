@extends('layouts.app')


@section('servicecontent')
<section class="Services section" id="services">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Services</h2>
            </div>
        </div>
        <div class="row">
          <!--service-item-->
          @foreach($services as $serviceKey => $service)
          <div class="service-item padd-15" data-tilt>
            <div class="service-item-inner" >
                <div class="icon"><i class="{{ $service['icon'] }}"></i></div>
                <h4>{{ $service['title'] }}</h4>
                <p>{{ $service['description'] }}
                </p>
            </div>
          </div>
        
           @endforeach
            
            <!--service-item-end-->
            
            <!--service-item-end-->
        </div>
     </div>
 </section>

@endsection