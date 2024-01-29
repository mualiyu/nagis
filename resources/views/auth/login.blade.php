@extends('layouts.app')


@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group position-relative has-icon-left mb-4">
      <input
        type="text"
        class="form-control form-control-xl"
        placeholder="Username"
        name="username"
        value="{{ old('username') }}" required
      />
      <div class="form-control-icon">
        <i class="bi bi-person"></i>
      </div>
      @error('username')
          {{ $message }}
      @enderror
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
      <input
        type="password"
        class="form-control form-control-xl"
        placeholder="Password"
        name="password"
        required
        parsley-required="true"
      />
      <div class="form-control-icon">
        <i class="bi bi-shield-lock"></i>
      </div>
    </div>
    @error('password')
        {{ $message }}
    @enderror
    <div class="form-check form-check-lg d-flex align-items-end">
      <input
        class="form-check-input me-2"
        type="checkbox"
        value=""
        id="flexCheckDefault"
        name="remember" {{ old('remember') ? 'checked' : '' }}
      />
      <label
        class="form-check-label text-gray-600"
        for="flexCheckDefault"
      >
        Keep me logged in
      </label>
    </div>
    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
      Log in
    </button>
  </form>
@endsection
