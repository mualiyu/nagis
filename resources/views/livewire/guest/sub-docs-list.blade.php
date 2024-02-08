<?php

use App\Models\Information;
use function Livewire\Volt\{state, computed};

state('information');

?>

<div>
    @if (count($this->information->documents)>0)
    @foreach ($this->information->documents as $in)
    <div class="card accordion-item">
        <div class="card-header" >
         <div class="row">
         <div class="col-8 text-black">{{$in->name}}</div>  <div class="col-4 text-end"><a href="{{url('/download/'.$in->url)}}" target="_blank"> <i class="uil uil-folder-download"></i> Download </a></div>
         </div>
        </div>
      </div>
    @endforeach
    @else
    <div class="card accordion-item">
        <div class="card-header" >
         <div class="row">
         <div class="col-12 text-gray">No document found here, Come back later!</div>
         </div>
        </div>
      </div>
    @endif
</div>
