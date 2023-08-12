@extends('layouts.index')

@section('title')
Application for Statutory Right of Occupancy
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">Application for Statutory Right of Occupancy</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="wrapper bg-light">
    <div class="">
      <div class="row mt-">
        <div class="col-xl-12 mx-auto">
  <iframe frameborder="0" style="overflow:hidden;height: 3100px;;width:100%" height="100%" width="100%" src="https://docs.google.com/forms/d/e/1FAIpQLSe2Ge1N2ic3KiJS3q2h0rAJ-4hI--4fgHhOW0XwCOUwa1zi-g/viewform"></iframe>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
@endsection
