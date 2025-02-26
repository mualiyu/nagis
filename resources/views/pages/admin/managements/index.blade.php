@extends('layouts.admin.index')

@section('title')
    Team - Admin
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Managements</h3>
          <!-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables.</p> -->
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
        <div class="flex-d card-header">
          <h5 class="card-title">List By Rank</h5>
          <a href="/ng-admin/managements/add" style="float: right" class="btn btn-secondary"
            >Add new member</a
          >
        </div>
        <div class="card-body">
          @livewire('admin.management-list')
        </div>
      </div>
    </section>
  </div>

@endsection
