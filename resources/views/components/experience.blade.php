@foreach ($experienceDetails as $experience)

<div class="timeline-item">   
    <div class="circle-dot"></div>
    <h6 class="timeline-date"> <i class="fa fa-calendar"></i>{{ $experience['date'] }}</h6>
     <h4 class="timeline-title">{{ $experience['title'] }} </h4>
     <h3> {{ $experience['company'] }}</h3>
     <p>{{ $experience['location'] }}</p>
     <h6 class="timeline-date">{{ $experience['responsibilities'] }}</h6>
    </div>
@endforeach