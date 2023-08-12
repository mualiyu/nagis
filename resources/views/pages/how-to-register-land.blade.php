@extends('layouts.index')

@section('title')
How to Register your Property
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">How to Register your Property</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <h2 class="display-5 mb- ">Property Registration in Nasarawa State</h2>
          <p class="lead fs-lg">Part of the resolution of the Nasarawa Environmental Business Enabling Council is to streamline and reform the procedure of property registration in the state. NAGIS has now reduced the procedures to only two (2);
                        <ul class="icon-list bullet-bg  bullet-primary">
                          <li><span><i class="uil uil-check lead fs-lg"></i></span><span><p class="lead fs-lg">Statutory Right of Occupancy (SRI/SRO)</p></span></li>
                          <li><span><i class="uil uil-check lead fs-lg"></i></span><span><p class="lead fs-lg">Systematic Property Registration Program (SPRP)</p></span></li>
                        </ul>

                    </p>


          <p class="lead fs-lg">
              In each procedure, the number of days in getting approval have been reduced to ten (10) and five (5) days for SRI/SRO and SPRP respectively. </p>

      <div class="pricing-wrapper mt-15">
          <h2 class=" text-cblue ">Statutory Right of Occupancy Procedures</h2>
        <div class="row gx-0 gy-6 mt-">
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none">  1</div>
                <h4 class="card-title">Application</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-primary mt- mb-">
                  <li><i class="uil uil-check"></i>The applicant fills the SRI / SRO Form with Proof of Ownership of the Land</li>
                  <li><i class="uil uil-check"></i>Application is captured in the Land Information System (LIS),</li>
                  <li><i class="uil uil-check"></i>Document uploaded to the Document Management System (DMS)</li>

              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none ">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none"> 2 </div>
                <h4 class="card-title">Site Inspection</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-primary mt- mb-">
                  <li><i class="uil uil-check"></i>On the same day of the application, the site of the property is visited for Inspection</li>
                  <li><i class="uil uil-check"></i>The site inspection is conducted to determine road setback and land use suitability</li>
                  <li><i class="uil uil-check"></i>Report is submitted for approval</li>

                </ul>
                <!-- <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a> -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none"> 3 </div>
                <h4 class="card-title">Survey</h4>
                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-primary mt- mb-8">
                  <li><i class="uil uil-check"></i>The Property is Surveyed based on the site inspection conducted, report is submitted for Check and Approval to the Surveyor General.</li>

                </ul>
                <!-- <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a> -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none ">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none"> 4 </div>
                <h4 class="card-title">Plot Matching</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-primary mt- mb-">
                  <li><i class="uil uil-check"></i>The survey data is captured in the GIS Cadastral system and allocated to the application opened in the LIS.</li>

                </ul>
                <!-- <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a> -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>

                  <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow bg-blue">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-success pe-none"> 5 </div>
                <h4 class="card-title text-white">R-of-O / C-of-O</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg  bullet-primary mt- mb- text-white">
                  <li><i class="uil uil-check"></i>The offer of terms and conditions is generated. </li>
                  <li><i class="uil uil-check"></i>This comes with
                      the Acceptance Letter, the C-of-O Bills</li>
                  <li><i class="uil uil-check"></i> Settle the bills</li>
                  <li><i class="uil uil-check"></i>The applicant fills the acceptance letter and C-of-O is generated for Governor's signature</li>

                </ul>

              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
        </div>
        <!--/.row -->
      </div>

          <div class="pricing-wrapper mt-15">
          <h2 class=" text-cblue ">Systematic Property Registration Program Procedures</h2>
        <div class="row gx-0 gy-6 mt-">
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none"> 1 </div>
                <h4 class="card-title">Application</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg  bullet-primary mt-7 mb-8">
                  <li><i class="uil uil-check"></i>Field Team fills the Application Form together with the Property Occupier</li>
                  <li><i class="uil uil-check"></i>Field Team make copies of existing documents of Proof or Ownership</li>


              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none ">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none"> 2 </div>
                <h4 class="card-title">Site Inspection</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg  bullet-primary mt-7 mb-8">
                  <li><i class="uil uil-check"></i>The field team determine road setback and land use suitability.</li>
                  <li><i class="uil uil-check"></i>The area of interest map is submitted for approval.</li>


                </ul>
                <!-- <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a> -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none"> 3 </div>
                <h4 class="card-title">Survey</h4>
                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-primary mt-7 mb-8">
                  <li><i class="uil uil-check"></i>Field Team captures Corner Points with GPS based on the Property Occupiers directive if the shape or the development or the boundaries have changed</li>

                </ul>
                <!-- <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a> -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow-none ">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none"> 4 </div>
                <h4 class="card-title">Plot Matching</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg bullet-primary mt-7 mb-8">
                  <li><i class="uil uil-check"></i>The survey data is captured in the GIS Cadastral system and allocated to the application opened in the LIS.</li>

                </ul>
                <!-- <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a> -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>

                  <div class="col-md-6 col-lg-3">
            <div class="pricing card shadow bg-blue">
              <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-success pe-none"> 5 </div>
                <h4 class="card-title text-white">R-of-O / C-of-O</h4>

                <!--/.prices -->
                <ul class="icon-list bullet-bg  bullet-primary mt-7 mb-8 text-white">
                  <li><i class="uil uil-check"></i>The offer of terms and conditions is generated. </li>
                  <li><i class="uil uil-check"></i>This comes with
                      the Acceptance Letter, the C-of-O Bills</li>
                  <li><i class="uil uil-check"></i> Settle the bills</li>
                  <li><i class="uil uil-check"></i>The applicant fills the acceptance letter and C-of-O is generated for Governor's signature</li>

                </ul>

              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
        </div>
        <!--/.row -->
      </div>
      <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg3.jpg">
            <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
              <h3 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">Register your property online today !!!</h3>
              <a href="SRO-application " class="btn btn-white rounded-pill mb-0 text-nowrap">Register Now</a>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>

@endsection
