@extends('layouts.admin.index')

@section('title')
Gallery - Admin
@endsection

@section('content')

  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Gallery</h3>
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
                Gallery
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12 col-xl-12">
        <div class="card">
          <div class="card-header">
            <h4>Gallery</h4>
            <a href="/admin/galleries/add" style="float: right" class="btn btn-secondary"
              >Add</a
            >
          </div>
          <div class="card-body">
            <div class="table-responsive">
              {{-- <table class="table table-hover table-lg">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="col-3">
                      <div class="align-items-center">
                        <p class="font-bold mb-0">Si Cantik</p>
                      </div>
                    </td>
                    <td class="col-auto">
                      <p class="font-bold mb-1">
                        zdgxfhcc yducgsg sckkscghjiudv dui:
                      </p>
                      <p class="mb-0">
                        Congratulations on your graduation!
                      </p>
                    </td>
                    <td>
                      <a href="#" class="btn btn-success"
                        >View/Edit</a
                      >
                      <a href="#" class="btn btn-warning"
                        ><i class="bi bi-trash-fill"></i
                      ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="col-3">
                      <div class="align-items-center">
                        <p class="font-bold mb-0">Si Cantik</p>
                      </div>
                    </td>
                    <td class="col-auto">
                      <p class="font-bold mb-1">
                        zdgxfhcc yducgsg sckkscghjiudv dui:
                      </p>
                      <p class="mb-0">
                        Congratulations on your graduation!
                      </p>
                    </td>
                    <td>
                      <a href="#" class="btn btn-success">View/Edit</a>
                      <a href="#" class="btn btn-warning"
                        ><i class="bi bi-trash-fill"></i
                      ></a>
                    </td>
                  </tr>
                </tbody>
              </table> --}}

              @livewire('admin.gallery.list')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
