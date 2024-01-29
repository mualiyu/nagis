@extends('layouts.index')

@section('title')
About Us
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">About Us</h1>
        </div>
      </div>
    </div>
  </section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">
      <h2 class="display-5 mb- ">About NAGIS</h2>
          <p class="lead fs-lg">The Nasarawa Geographic Information Service (NAGIS) is a Nasarawa State Government Agency founded in 2012 and established by law in 2017, it is one of the three components of the Nasarawa Development Platform (NDP), the other two are Aerial/Mapping, Urban Planning /Urban Renewal.
          NAGIS is the only official GIS data source for the state and also hosts all digital land administration matters.
          </p>
          <p class="lead fs-lg">
              NAGIS activities are governed by rules and regulation and fees schedules contained in the NAGIS land use regulation 2019 approved by His Excellency Engr Abdullahi A. Sule the Executive Governor of Nasarawa State.These regulations ensure transparency in the conduct of all Land matters and transactions thus providing clarity and guidance for the public, Professional and officials of the State Government.</p>

    </div>

  </section>

  <section class="wrapper bg-light">
    <div class="container py-14 py-md-">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
        <div class="col-lg-4 mt-lg-2">

             <h1 class="display-1 fs-66 lh-xxs mb-0">Full Range Geospatial Services</h1>

        </div>
        <!-- /column -->
        <div class="col-lg-8">
          <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
            <div class="col">
              <figure class="px-3 px-md-0 px-xxl-2 text-center"><img src="{{asset('/assets/img/brands/1.svg')}}" alt="" /> <span class="mt-10 text-black">Geomatics Engineers</span></figure>
            </div>
            <!--/column -->
            <div class="col">
              <figure class="px-3 px-md-0 px-xxl-2 text-center"><img src="{{asset('/assets/img/brands/2.svg')}}" alt="" /> <span class="mt-10 text-black">Land Suveyors</span></figure>
            </div>
            <!--/column -->
            <div class="col">
              <figure class="px-3 px-md-0 px-xxl-2 text-center"><img src="{{asset('/assets/img/brands/3.svg')}}" alt="" /><span class="mt-10 text-black">GIS Analyst</span></figure>
            </div>
            <!--/column -->
            <div class="col">
              <figure class="px-3 px-md-0 px-xxl-2 text-center"><img src="{{asset('/assets/img/brands/4.svg')}}" alt="" /><span class="mt-10 text-black">IT Professionals</span></figure>
            </div>
            <!--/column -->
            <div class="col">
              <figure class="px-3 px-md-0 px-xxl-2 text-center"><img src="{{asset('/assets/img/brands/5.svg')}}" alt="" /><span class="mt-10 text-black">Field Support Staff</span></figure>
            </div>

          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
@endsection
