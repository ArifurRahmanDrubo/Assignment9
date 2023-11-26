@extends('layouts.app')

@section('contactcontent')
<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Contact Me</h2>
            </div>
        </div>
            <div class="row">
               <div class="col-4  order-2">
                <div class="lottie " id="contact-lottie">
                    <script>
                        bodymovin.loadAnimation({
                         container: document.getElementById("contact-lottie"),
                         path: '{{ asset('asset/contacts.json') }}',
                         render:'svg',
                         loop:true,
                         autoplay:true,    
                      })
                      </script>
                </div>
               </div>  
               <div class="col-8  order-1">
                <div class="contact ">
                    
                    <!--  contact-info-item-->
                      <div class="row">
                       <div class="contact-info-item  ">
                           <div class="icon"><i class="fa fa-phone"></i></div>
                           <h4>Call us on</h4>
                           <p>01955937326</p>
                       </div>
                       <div class="contact-info-item  ">
                           <div class="icon"><i class="fa fa-map-marker"></i></div>
                           <h4>Office</h4>
                           <p> 290 Jurain, Dhaka</p>
                       </div>
                       <div class="contact-info-item ">
                           <div class="icon"><i class="fa fa-envelope"></i></div>
                           <h4> Email</h4>
                           <p>drubo206@gmail.com</p>
                       </div>
                      </div>
                        
                     <!--  contact-info-item end-->
                      <!--  contact-info-item-->
                     
                     <!--  contact-info-item end-->
                      <!--  contact-info-item-->
                     
                     <!--  contact-info-item end-->
                     <!--  contact-form-->
                     
                       <div class="contact-form padd-15">
                           <div class="row">
                               <div class="form-item col-6 padd-15">
                                   <div class="form-group">
                                       <input type="text" class="form-control" placeholder="Name*" required>
                                   </div>
                               </div>
                               <div class="form-item col-6 padd-15">
                                   <div class="form-group">
                                       <input type="email" class="form-control" placeholder="Email*" required>
                                   </div>
                               </div>                  
                           </div>
                           <div class="row">
                               <div class="form-item col-12 padd-15">
                                   <div class="form-group">
                                       <input type="text" class="form-control" placeholder="Subject*" required>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="form-item col-12 padd-15">
                                   <div class="form-group">
                                       <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Your Message......" required></textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class=" col-12 padd-15">
                                   <button type="Submit" class="btn">Your Message</button>
                               </div>
                           </div>
                       </div>
                      
                    
                   </div>
               </div>
               
             </div>                
                <!--  contact-form end-->    
    </div>
</section>
@endsection