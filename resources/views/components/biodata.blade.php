@foreach ($biodata as $key => $value)
<div class="info-item padd-15">
    <p>{{ $key }} : <span>{{ $value }}</span></p>
    
</div>
@endforeach