<?php

use function Livewire\Volt\{computed};
use App\Models\Information;

$count = computed(function () {
    return Information::count();
});
?>

<div>
    <div class="card">
        <div class="card-body px-4 py-4-5">
          <div class="row">
            <div
              class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
            >
              <div class="stats-icon purple mb-2">
                <i class="iconly-boldShow"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">
                No. of Documents
              </h6>
              <h6 class="font-extrabold mb-0">{{$this->count}}</h6>
            </div>
          </div>
        </div>
      </div>
</div>
