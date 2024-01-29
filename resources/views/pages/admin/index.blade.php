@extends('layouts.admin.index')

@section('title')
    Admin - Dashboard
@endsection

@section('content')
<div class="page-heading">
    <h3>Welcome {{ Auth::user()->name }}</h3>
  </div>

  <div class="page-content">

    <section class="row">
      <div class="col-12 col-lg-9">
        <div class="row">
          <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon purple mb-2">
                      <i class="iconly-boldShow"></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                      No. of Visits
                    </h6>
                    <h6 class="font-extrabold mb-0">1122365</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-md-6">
            @livewire('admin.management-count')
          </div>
          <div class="col-6 col-lg-4 col-md-6">
            @livewire('admin.post-count')
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Visits</h4>
              </div>
              <div class="card-body">
                <div id="chart-profile-visit"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4>Latest Post</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-lg">
                    <thead>
                      <tr>
                        <th>Author</th>
                        <th>Title</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-3">
                          <div class="align-items-center">
                            <p class="font-bold mb-0">Si Cantik</p>
                          </div>
                        </td>
                        <td class="col-auto">
                          <p class="font-bold mb-1">
                            (zdgxfhcc yducgsg sckkscghjiudv dui:
                          </p>
                          <p class="mb-0">
                            Congratulations on your graduation!
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-3">
                          <div class="align-items-center">
                            <p class="font-bold mb-0">Si Ganteng</p>
                          </div>
                        </td>
                        <td class="col-auto">
                          <p class="font-bold mb-1">
                            (zdgxfhcc yducgsg sckkscghjiudv dui:
                          </p>
                          <p class="mb-0">
                            Wow amazing design! Can you make another
                            tutorial for this design?
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- profile -->
      <div class="col-12 col-lg-3">
        <div class="card">
          <div class="card-body py-4 px-4">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl">
                <img src="{{asset('/admin/assets/compiled/jpg/1.jpg')}}" alt="Face 1" />
              </div>
              <div class="ms-3 name">
                <h5 class="font-bold">{{ Auth::user()->username }}</h5>
                <h6 class="text-muted mb-0">@nagis.na.gov.ng</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Recent Comments</h4>
          </div>
          <div class="card-content pb-4">
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <!-- <img src="assets/static/images/faces/4.jpg"> -->
              </div>
              <div class="name ms-4">
                <h5 class="mb-1">Hank Schrader</h5>
                <p class="text-muted mb-0">johnducky</p>
              </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <!-- <img src="assets/static/images/faces/5.jpg"> -->
              </div>
              <div class="name ms-4">
                <h5 class="mb-1">Dean Winchester</h5>
                <p class="text-muted mb-0">jhdc imdean</p>
              </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
              <div class="avatar avatar-lg">
                <!-- <img src="assets/static/images/faces/1.jpg"> -->
              </div>
              <div class="name ms-4">
                <h5 class="mb-1">John Dodol</h5>
                <p class="text-muted mb-0">jhsfj dodoljohn</p>
              </div>
            </div>
            <div class="px-4">
              <button
                class="btn btn-block btn-xl btn-outline-primary font-bold mt-3"
              >
                Mark as read
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Managements Profile</h4>
          </div>
          <div class="card-body">
            <div id="chart-visitors-profile"></div>
          </div>
        </div>
      </div>
    </section>

</div>
@endsection
