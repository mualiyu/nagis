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
                <a href="/admin">Dashboard</a>
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
            Procedure and Cost for Obtaining CofO
          </h5>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>Name</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Procedure and Cost for Obtaining CofO</td>
                <td>
                  <a href="#" class="btn btn-success">Download</a>
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
