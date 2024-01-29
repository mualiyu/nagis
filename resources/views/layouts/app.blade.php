<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Admin Nagis</title>

    <link
      rel="shortcut icon"
      href="{{asset('/admin/assets/compiled/svg/favicon.svg')}}"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="data:image/png;base64,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"
      type="image/png"
    />
    <script
      async
      type="module"
      crossorigin
      src="{{asset('/admin/assets/compiled/js/auth-forgot-password.js')}}"
    ></script>
    <link
      rel="stylesheet"
      href="{{asset('/admin/assets/compiled/css/auth-forgot-password.css')}}"
    />
    <link rel="stylesheet" href="{{asset('/admin/assets/compiled/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('/admin/assets/compiled/css/app-dark.css')}}" />
  </head>

  <body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">
      <div class="row h-100">
        <div class="col-lg-5 col-12">
          <div id="auth-left">
            <div class="auth-logo">
              <a href="/admin"
                ><img src="{{asset('/admin/assets/compiled/svg/logo.svg')}}" alt="Logo"
              /></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">
              Log in with your admin credentials.
            </p>

            @yield('content')
            <div class="text-center mt-5 text-lg fs-4">

              <p>
                  @if (Route::has('password.request'))
                  <a class="font-bold" href="{{ route('password.request') }}"
                    >Forgot password?</a>.
                @endif
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right"></div>
        </div>
      </div>
    </div>


  </body>
</html>

