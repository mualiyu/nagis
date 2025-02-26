<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link
      rel="shortcut icon"
      href="{{asset('/admin/assets/compiled/svg/logo.svg')}}"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="{{asset('/admin/assets/compiled/svg/logo.svg')}}"
      type="image/png"
    />

    <script
      async
      type="module"
      crossorigin
      src="{{asset('/admin/assets/compiled/js/layout-rtl-backup.js')}}"
    ></script>
    <link rel="stylesheet" href="{{asset('/admin/assets/compiled/css/layout-rtl-backup.css')}}" />
    <link rel="stylesheet" href="{{asset('/admin/assets/compiled/css/app-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('/admin/assets/compiled/css/app.css')}}" />
    @livewireStyles
  </head>

  <body>
    <script src="{{asset('/admin/assets/static/js/initTheme.js')}}"></script>
    <div id="app">

        @include('layouts.admin.sidebar')


      <div id="main">

        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>
        {{-- @volt --}}
        @yield('content')


        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>{{date('Y')}} &copy;</p>
            </div>
          </div>
        </footer>

      </div>
    </div>
    <script src="{{asset('/admin/assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('/admin/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    @livewireScripts
    <!-- tinniy form -->
    <script src="{{asset('/admin/assets/extensions/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/admin/assets/static/js/pages/tinymce.js')}}"></script>

    <script src="{{asset('/admin/assets/compiled/js/app.js')}}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{asset('/admin/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('/admin/assets/static/js/pages/dashboard.js')}}"></script>
  </body>
</html>
