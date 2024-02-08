<?php

use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Gallery;

placeholder('<div>Loading...</div>');

$galleries = computed(function () {
    return Gallery::orderBy('created_at', 'DESC')->get();
});

?>

<div>
    <div class="row photos">
        @if (count($this->galleries)>0)
        @foreach ($this->galleries as $g)
            <div class="col-sm-6 col-md-4 col-lg-4 item" style="height: 400px;"><a href="{{url('/storage/'. $g->image)}}" data-lightbox="photos"><img class="img-fluid" style="height: 400px; width:auto; object-fit: cover;" src="{{url('/storage/'. $g->image)}}"></a></div>
        @endforeach
        @else
            <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">Oops! No picture found, come back later.</div>
        @endif
    </div>
</div>
