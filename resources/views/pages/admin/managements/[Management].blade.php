@extends('layouts.admin.index')

@section('title')
{{$management->name}} - Admin
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          {{-- <h3>Update Manager</h3> --}}
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav
            aria-label="breadcrumb"
            class="breadcrumb-header float-start float-lg-end"
          >
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/ng-admin">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Update Manager
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
      <div class="row match-height">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Update Manager</h4>
              <a href="{{url('/ng-admin/managements')}}" class="btn btn-secondary">Back</a>
            </div>
            <div class="card-content">
              <div class="card-body">
                <livewire:admin.update-management-form :management="$management" />
                {{-- @livewire('admin.update-management-form', ['management' => $management], key($management->id)) --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
  </div>
@endsection
