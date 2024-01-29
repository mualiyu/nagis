@extends('layouts.admin.index')

@section('title')
    About Us - Admin
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Add Document Info</h3>
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
                Add info
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
              <h4 class="card-title">Enter details below</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form">
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="form-group">
                        <label for="first-name-column"> Name</label>
                        <input
                          type="text"
                          id="first-name-column"
                          class="form-control"
                          placeholder="Name"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-md-12 col-12">
                      <div class="form-group">
                        <label for="company-column">Description</label>
                        <!-- <input type="text" id="company-column" class="form-control"
                                          name="company-column" placeholder="Company"> -->
                        <textarea
                          name="description"
                          id="default"
                          cols="30"
                          rows="3"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                      <button
                        type="submit"
                        class="btn btn-primary me-1 mb-1"
                      >
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
  </div>
@endsection
