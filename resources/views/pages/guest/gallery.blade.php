@extends('layouts.index')

@section('title')
Gallery
@endsection

@section('style')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<style>

.photo-gallery .photos {
  padding-bottom:20px;
}

.photo-gallery .item {
  padding-bottom:30px;
  height: 300px;
}

</style>
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-15 pt-md-15 pb-15 pb-md-15 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">Our Gallery</h1>
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

      <div class="photo-gallery">
        {{-- <div class="container"> --}}
            @livewire('guest.gallery')
            {{-- <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
            </div> --}}
        {{-- </div> --}}
    </div>

      {{-- @livewire('guest.gallery') --}}

    </div>
    <!-- /.container -->
  </section>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
@endsection
