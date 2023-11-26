@foreach ($educationDetails as $education)
   <div class="timeline-item">   
    <div class="circle-dot"></div>
    <h6 class="timeline-date"> <i class="fa fa-calendar"></i>2003-2005
    </h6>
     <h4 class="timeline-title">{{ $education['degree'] }}</h4>
     <h3> - {{ $education['university'] }}</h3>
     <p>{{ $education['location'] }} | {{ $education['graduation_date'] }}</p>
     <p>{{ $education['thesis'] ?? '' }}</p>
  
        @foreach ($education['courses'] as $course)
            <h6 class="timeline-date">*  {{ $course }}</h6>
        @endforeach
    
    </div>

    
 
@endforeach