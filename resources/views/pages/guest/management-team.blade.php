@extends('layouts.index')

@section('title')
Management Team
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">Management Team</h1>
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

      @livewire('guest.team')

    </div>
    <!-- /.container -->
  </section>
@endsection
