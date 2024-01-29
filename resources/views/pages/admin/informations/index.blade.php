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
                <a href="/admin">Dashboard</a>
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
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Procedure and Cost for Obtaining CofO</td>
                <td>Offenburg</td>
                <td>
                  <a href="single-info.html" class="btn btn-success"
                    >View</a
                  >
                  <a href="#" class="btn btn-warning"
                    ><i class="bi bi-trash-fill"></i
                  ></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

@endsection
