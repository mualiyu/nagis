<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nasarawa Geographic Information Service (NAGIS) is a State Agency established in 2012 and signed into Law in May 2017 to support the development of Nasarawa State.

  NAGIS is the only official GIS Data source for Nasarawa state that hosts all digital land administration matters. The NAGIS technical platform deploys the latest information and communication hardware with Land Administration System (LAS) and Geographic Information System (GIS) linked to the NAGIS Digital Date Repository with full coverage of aerial photography of the state.">
<meta name="keywords" content="NAGIS, Nasarawa Geography Information Service, ">

<title>@yield('title')</title>
  <link rel="shortcut icon" href="{{asset('/assets/img/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</head>

<body>
  <div class="content-wrapper">

    @include('layouts/header')


    @yield('content')


  </div>
  <!-- /.content-wrapper -->
@include('layouts/footer')

  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{asset('/assets/js/plugins.js')}}"></script>
  <script src="{{asset('/assets/js/theme.js')}}"></script>
</body>

</html>
