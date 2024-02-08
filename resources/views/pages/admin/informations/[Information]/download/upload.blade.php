@extends('layouts.admin.index')

@section('title')
    Upload Document - Admin
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Document</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav
            aria-label="breadcrumb"
            class="breadcrumb-header float-start float-lg-end"
          >
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{$information->name}}
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Add document
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
              <h4 class="card-title">Upload Document under {{$information->name}}</h4>
              <a href="{{url('/admin/informations/'.$information->id)}}" style="float: right" class="btn btn-secondary"
                >Back</a
              >
            </div>
            <div class="card-content">
              <div class="card-body">

                @livewire('admin.doc.downs.add', ['information'=>$information], key($information->id))
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
  </div>
@endsection
