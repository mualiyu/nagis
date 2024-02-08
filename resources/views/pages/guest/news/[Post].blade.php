@extends('layouts.index')
@section('title')
News - {{$post->title}}
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-20 pt-md-20 pb-20 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">{{$post->title}}</h1>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">
      </div>
      @livewire('guest.news')
    </div>
  </section>
   <figure class="card-img-top"><img class="img-fluid" src="{{url('/storage/'.$p->image)}}" srcset="{{url('/storage/'.$p->image)}}" alt="{{url('/storage/'.$p->image)}}" /></figure>
   --}}

   <section class="wrapper bg-light mt-4">
    <div class="container py-1 py-md-3">
    <h2 class="fs-15 text-uppercase text-blue1 mb-3"></h2>
    <div class="row gx-lg-3 mb-1 gy-5">
      <div class="col-lg-7">
        <h3 class="display-4 mb-1 pe-xl-">{{$post->title}}</h3>
        <br>
        {{-- <p class=" text-black" >{{nl2br($post->content)}}</p> --}}
        <p class=" text-black" style="white-space: pre-wrap;">{{$post->content}}</p>
    </div>
    <!-- /column -->
    <div class="col-lg-5">
          <figure class="card-img-top"><img class="img-fluid" src="{{url('/storage/'.$post->image)}}" srcset="{{url('/storage/'.$post->image)}}" alt="{{url('/storage/'.$post->image)}}" /></figure>

      </div>
      <!-- /column -->
    </div>

    </div>
    <!-- /.container -->
    </section>

    <section class="wrapper bg-light">
        <div class="container py-1 py-md-3">
          <div class="row mb-3">
            <h2 class="fs-15 text-uppercase text-blue1 mb-3">Recent Updates</h2>
          </div>
          <!--/.row -->

          @livewire('guest.news-recent')

        </div>
        <!-- /.container -->
      </section>


@endsection
