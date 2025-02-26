@extends('layouts.admin.index')

@section('title')
Downloadables - Admin
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Downloadables</h3>
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
                info
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title" align="center">
            {{$information->name}}
          </h5>
          <a href="{{url('/ng-admin/informations/'.$information->id.'/download/upload')}}" style="float: right" class="btn btn-secondary"
            >Add new document</a
          >
          <a href="/ng-admin/informations/" style="float: " class="btn btn-secondary"
            >Back</a
          >
        </div>
        <div class="card-body">
          @livewire('admin.doc.downs.list', ['information' => $information], key($information->id))
        </div>
      </div>
    </section>
  </div>
@endsection
