<?php

use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Management;

placeholder('<div>Loading...</div>');

$mms = computed(function () {
    return Management::all();
});

?>

<div>
    <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
        @foreach ($this->mms as $m)
        <div class="col-md-6 col-lg-3">
          <div class="position-relative">
            <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
            <div class="card">
              <figure class="card-img-top"><img class="img-fluid" src="{{url('/storage/'.$m->image)}}" srcset="{{url('/storage/'.$m->image)}}" alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">{{$m->name}}</h4>
                <p class="mb-0">{{$m->position}}</p>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /div -->
        </div>
        @endforeach
        <!--/column -->

      </div>
</div>
