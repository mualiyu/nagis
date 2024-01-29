@extends('layouts.index')

@section('title')
Apply Organisation
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">Apply Organisation</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mt-6">
        <div class="col-xl-10 mx-auto">
  <iframe frameborder="0" style="overflow:hidden;height: 3100px;;width:100%" height="100%" width="100%" src="https://docs.google.com/forms/d/e/1FAIpQLScwrbI_BFFfMvl6IzlODddYjAdkJbgMBSOyGnH05VJ-RPR8Ig/viewform"></iframe>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
@endsection
