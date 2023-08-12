@extends('layouts.index')

@section('title')
Laws
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">Laws</h1>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-16 d-none d-xl-block">

      </aside>
      <!-- /column -->
      <div class="col-xl-8 order-xl-2">
        <section id="snippet-1" class="wrapper py-16">


          <div class="accordion accordion-wrapper mt-10" id="accordion">


            <div class="card accordion-item">
              <div class="card-header" >
               <div class="row">
               <div class="col-8 text-black">LAW TO PROVIDE FOR THE ESTABLISHMENT OF THE NASARAWA GEOGRAPHIC INFORMATION SERVICE (NAGIS) AND FOR MATTERS CONNECTED</div>  <div class="col-4 text-end"><a href="./assets/download/Law-for-establismentofnagis&matterconnected.pdf"> <i class="uil uil-folder-download"></i> Download </a></div>
               </div>
              </div>
            </div>

          <div class="card accordion-item">
              <div class="card-header" >
               <div class="row">
               <div class="col-8 text-black">GEOGRAPHIC INFORMATION SERVICE (AMENDMENT) LAW 2020</div>  <div class="col-4 text-end"><a href="./assets/download/ammenmentnagis.pdf"> <i class="uil uil-folder-download"></i> Download </a></div>
               </div>
              </div>
            </div>


          </div>
          <!--/.accordion -->
        </section>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>

@endsection