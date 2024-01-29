@extends('layouts.admin.index')

@section('title')
    About Us - Admin
@endsection

@section('content')

  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>About us</h3>
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
                About-Us
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <form action="" method="get" id="about-form">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">About us</h4>
          </div>
          <div class="card-body">
            <p>Enter website about us content blow</p>
            <textarea
              name="description"
              id="default"
              cols="30"
              rows="3"
            ></textarea>
            <button type="submit" class="btn btn-primary mt-3">
              Update
            </button>
          </div>
        </div>
      </form>
    </section>
  </div>
@endsection
