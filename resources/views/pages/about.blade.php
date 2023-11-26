@extends('layouts.app')



@section('content')

<section class="about section" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>About me</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>I'm Arifur Rahman and @include('components.typing')</h3>
                        <p>Hi! My name Arifur Rahman. I am a Web Developer, and I'm very passionate and dedicated 
                        to my work. With 5 years experience as a professionaWeb developer, I have acquired the skills and knowledgnecessary to make your project a success. I enjoy everstep of the design process, from discussion ancollaboration.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="personal-info padd-15">
                        <h3 class="title">Bio Data </h3>
                     <div class="row">
                       @include('components.biodata')    
                       </div>
                       <div class="row">
                          <div class="button padd-15">
                              <a class="btn" href="">Download CV</a>
                              <a  data-section-index="1" class="btn hire-me" href="#contact">Hire Me</a>
                          </div>
                      </div>
                      </div>                         
                      <div class="skills">
                        <h3 class="title">Skills </h3>
                         <div class="row">
                             @include('components.skill')
                         </div>
                      </div>          
                    <div class="row">
                        <div class="education padd-15">
                            <h3 class="title">Education</h3>
                            <div class="row">
                               <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                  <!-- timeline-item-->
                                   @include('components.education')
                                    <!-- timeline-item end-->
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="exprience padd-15">
                            <h3 class="title">Experience </h3>
                              <div class="row">
                               <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                  <!-- timeline-item-->
                                   @include('components.experience')
                                    <!-- timeline-item end-->
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection