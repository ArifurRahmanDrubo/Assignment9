@foreach ($skills as $key => $value)
  <div class="skill-item padd-15">
    <h5>{{ $key }}</h5>
    <div class="skill-progress">
        <div class="progress-in" style="width: {{ $value }}"></div>
        <div class="progress-percent">{{ $value }}</div>
    </div>
 </div>
@endforeach