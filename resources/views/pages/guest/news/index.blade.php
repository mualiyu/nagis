@extends('layouts.index')

@section('title')
News
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-15 pt-md-15 pb-15 pb-md-15 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">News</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">

        <!--/column -->
      </div>
      <!--/.row -->

      @livewire('guest.news')

    </div>
    <!-- /.container -->
  </section>


@endsection
