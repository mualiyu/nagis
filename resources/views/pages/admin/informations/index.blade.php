@extends('layouts.admin.index')

@section('title')
Information - Admin
@endsection

@section('content')

  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Documents Info</h3>
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
                Managements
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Doc's Info</h5>
          <a href="/ng-admin/informations/add" style="float: right" class="btn btn-secondary"
            >Add info document</a
          >

        </div>
        <div class="card-body">
          @livewire('admin.doc.list')
        </div>
      </div>
    </section>
  </div>

@endsection
