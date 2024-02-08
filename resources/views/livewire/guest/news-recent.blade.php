<?php
use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Post;

placeholder('<div>Loading...</div>');

$posts = computed(function () {
    return Post::orderBy('created_at', 'DESC')->limit(4)->get();
});


?>

<div>
    <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
        @if (count($this->posts)>0)
        @foreach ($this->posts as $p)
        <div class="col-md-6 col-lg-3">
          <div class="position-relative">
            <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
            <div class="card">
              <figure class="card-img-top"><img class="img-fluid" src="{{url('/storage/'.$p->image)}}" srcset="{{url('/storage/'.$p->image)}}" alt="{{url('/storage/'.$p->image)}}" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">{{$p->title}}</h4>
                <p class="mb-0">{{substr($p->content, 0, 50)}}.....</p> <br>
                <p class="mb-0"><a href="{{url('/news/'.$p->id)}}">Read More</a></p>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /div -->
        </div>
        @endforeach
        @else
        <div class="col-md-12 col-lg-12">
            <p>No news yet, come back later. Thank you!</p>
        </div>
        @endif
        <!--/column -->

      </div>
</div>
