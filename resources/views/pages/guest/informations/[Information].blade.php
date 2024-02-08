@extends('layouts.index')

@section('title')
{{$information->name}}
@endsection

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{asset('/assets/img/bg.png')}}">
    <div class="container pt-19 pt-md-21 pb-18 pb-md-20 ">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
          <h1 class="display-1 text-start text-white mb-3">{{$information->name}}</h1>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-16 d-none d-xl-block">

      </aside>

      <div class="col-xl-8 order-xl-2">
        <section id="snippet-1" class="wrapper py-10">


          <div class="accordion accordion-wrapper mt-10" id="accordion">


            @livewire('guest.sub-docs-list', ['information' => $information], key($information->id))


          </div>
          <!--/.accordion -->
        </section>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
@endsection
