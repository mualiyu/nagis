<?php

use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Information;

placeholder('<div>Loading...</div>');

$infs = computed(function () {
    return Information::offset(0)->limit(5)->get(); //orderBy('id', 'ASC')->limit(5);
});

?>

<div>
    @foreach ($this->infs as $i)
    <li class="nav-item"><a class="dropdown-item" href="{{url('/informations/'. $i->id)}}">{{$i->name}}</a></li>
    @endforeach
    {{-- <li class="nav-item"><a class="dropdown-item" href="procedure-for-obtaining-RofO">Procedure and Cost for Obtaining RofO</a></li>
    <li class="nav-item"><a class="dropdown-item" href="procedure-for-obtaining-RofO">Data for CofO</a></li>
    <li class="nav-item"><a class="dropdown-item" href="downloable-documents">Downloadable Documents</a></li>
    <li class="nav-item"><a class="dropdown-item" href="laws">Laws</a></li> --}}
</div>
