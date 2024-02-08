@extends('layouts.admin.index')

@section('title')
    Admin - Dashboard
@endsection

@section('content')
<div class="page-heading pt-4 mt-3">
    <h3>Welcome {{ Auth::user()->name }}</h3>
  </div>

  <div class="page-content">

    <section class="row">
      <div class="col-12 col-lg-9">
        <div class="row">
          <div class="col-6 col-lg-4 col-md-6">
            @livewire('admin.doc-count')
          </div>
          <div class="col-6 col-lg-4 col-md-6">
            @livewire('admin.management-count')
          </div>
          <div class="col-6 col-lg-4 col-md-6">
            @livewire('admin.post-count')
          </div>
        </div>
        <div class="row">
          {{-- <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Visits</h4>
              </div>
              <div class="card-body">
                <div id="chart-profile-visit"></div>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="row">

          <div class="col-12 col-xl-12">
            @livewire('admin.dash-posts')
            </div>

        {{-- <div class="col-4 col-xl-4">

        </div> --}}

        </div>
      </div>

      <!-- profile -->
      <div class="col-12 col-lg-3">
        <div class="card">
          <div class="card-body py-4 px-4">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl">
                {{-- <img src="{{asset('/admin/assets/compiled/jpg/1.jpg')}}" alt="Face 1" /> --}}
              </div>
              <div class="ms-3 name">
                <h5 class="font-bold">Hi {{ Auth::user()->name }}</h5>
                <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>
                {{-- @nagis.na.gov.ng --}}
              </div>
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

        {{-- @livewire('admin.dash-comments') --}}
      </div>
    </section>

</div>
@endsection
