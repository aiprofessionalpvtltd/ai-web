@extends('layouts.frontend.main')

@section('content')

    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-4 col-md-4 col-lg-4 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome back</h1>
                            <p class="lead">
                                Sign in to your account to continue
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
{{--                                    <div class="text-center">--}}
{{--                                        <img src="{{asset('assets/frontend/images/logo.png')}}" alt="logo" class="img-fluid " width="132" height="132" />--}}
{{--                                    </div>--}}
                                    @include('backend.message')
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror                                    </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                            <small>
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </small>
                                        </div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                                <span class="form-check-label">
													Remember me next time
												</span>
                                            </label>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
