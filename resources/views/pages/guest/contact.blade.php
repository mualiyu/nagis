@extends('layouts.index')

@section('title')
Contact us
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">Contact us</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
        <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
        <figure class="rounded"><img src="./assets/img/AdobeStock_541151655.jpeg" srcset="./assets/img/a.jpg" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <img src="./assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <!-- <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2> -->
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Head Office</h5>
            <address>NAGIS Head Office<br class="d-none d-md-block" />
        Jos Road Lafia, Nasarawa State.
            </address>

        <h5 class="mb-1">Service Center</h5>
            <address>NAGIS Service Centre <br class="d-none d-md-block" />
        Mararaba Gurku, Karu Nasarawa State.


            </address>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Phone</h5>
            <p>+234 703 267 7637</p>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">E-mail</h5>
            <p class="mb-0"> <p class="link-body">customerservice@nagis.org <br>
        Info@nagis.org
</p>
          </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
@endsection
