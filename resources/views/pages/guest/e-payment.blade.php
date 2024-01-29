@extends('layouts.index')

@section('title')
E Payments
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">E Payments</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-14 py-md-16 bg-map" data-image-src="./assets/img/map.png">
    <div class="container py-0 py-md-18">
      <div class="row">
        <div class="col-lg-6 col-xl-5 mx-auto">
          <h2 class="display-4 mb-3 text-center">Make Payment</h2>
          <p class="lead mb-5 px-md-16 px-lg-3">You will be redirected to the Nasarawa Instant Revenue Platform to process your payments</p>
          <a href="https://nasarawaigr.com/c/generate-invoice" target="_blank" class="btn btn-primary rounded-pill">Proceed</a>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
@endsection
