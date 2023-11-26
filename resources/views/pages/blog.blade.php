@extends('layouts.app')

@section('blogcontent')
<section class="blog section " id="blog">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2> Latest Blog</h2>
            </div>
        </div>
        <div class="row">
          <!--blog-item start-->
          @foreach($blogPosts as $post)
          <div class="blog-item padd-15">
            <div class="blog-item-inner shadow-dark">
                <div class="blog-img">
                    <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }} Image">
                    <div class="blog-date">
                        {{ $post['date'] }}
                    </div>
                </div>
                <div class="blog-item-info">
                    <h4 class="blog-title">{{ $post['title'] }}</h4>
                    <p class="blog-description">{{ $post['content'] }}</p>
                    <p class="blog-tags">Tags :  {{ implode(', ', $post['tags']) }}</p>
                </div>
            </div>          
         </div>
           
          @endforeach
           
            <!--blog-item end-->   
        </div>
       </div>
</section>
@endsection