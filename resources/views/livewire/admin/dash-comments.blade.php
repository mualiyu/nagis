<?php

use function Livewire\Volt\{computed};
use App\Models\Comment;

$comments = computed(function () {
    return Comment::offset(0)->orderBy('created_at', 'DESC')->limit(6)->get();
});

?>

<div>
    <div class="card">
        <div class="card-header">
          <h4>Recent Comments</h4>
        </div>
        <div class="card-content pb-4">
            @if (count($this->comments)>0)
            @foreach ($this->comments as $c)
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <!-- <img src="assets/static/images/faces/4.jpg"> -->
              </div>
              <div class="name ms-4">
                <h5 class="mb-1">{{$c->name}}</h5>
                <p class="text-muted mb-0">{{substr($c->content, 0, 50)}}.....</p>
              </div>
            </div>
            @endforeach
              <div class="px-4">
                <button
                  class="btn btn-block btn-xl btn-outline-primary font-bold mt-3" >
                  Mark as read
                </button>
              </div>
            @else
            <div class="recent-message d-flex px-4 py-3">
                <div class="name ms-4">
                  <p class="text-muted mb-0">No comment yet...</p>
                </div>
              </div>
            @endif


        </div>
      </div>
</div>
