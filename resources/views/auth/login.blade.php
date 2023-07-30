@extends('welcome')

@section('content')
    @push('styles')
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
        <style>
            #sign_in_li {
                box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
            }

            #sign_in_li:hover {
                transform: translateY(5px);
                box-shadow: inset 0px 10px 20px 2px rgba(0, 0, 0, 0.25);
            }

            #sign_up_li {
                box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
            }

            #sign_up_li:hover {
                transform: translateY(5px);
                box-shadow: inset 0px 10px 20px 2px rgba(0, 0, 0, 0.25);
            }

            #btn-g {
                box-shadow: inset -5px -5px 9px rgba(255, 255, 255, 0.45), inset 5px 5px 9px rgba(94, 104, 121, 0.3);
            }
        </style>
    @endpush
    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div id="btn-g" class="btn-group btn-group-sm bg-secondary p-2">
                            <a href="#" id="sign_in_li" class="btn btn-secondary active" aria-current="page">Masuk</a>
                            <a href="#" id="sign_up_li" class="btn btn-secondary">Registrasi</a>
                        </div>
                        <div class="sign_in">
                            <h3 class="card-title text-center mb-5"> Masuk </h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="text-center my-3">
                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Ingat Saya') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center my-3">
                                    <div class="row mb-3">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Masuk') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Lupa Kata Sandi ?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sign_up">
                            <h3 class="card-title text-center mb-5"> Buat Akun </h3>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Kirim') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center text-body-secondary">
                    sosmed
                </div>
            </div>
        </div>
    </div>
    </div>


    @push('scripts')
        <script>
            $(".sign_up").hide();
            $("#sign_in_li").addClass("active");

            $("#sign_up_li").click(function() {
                $(this).addClass("active");
                $("#sign_in_li").removeClass("active");
                $(".sign_up").show();
                $(".sign_in").hide();
            })

            $("#sign_in_li").click(function() {
                $(this).addClass("active");
                $("#sign_up_li").removeClass("active");
                $(".sign_in").show();
                $(".sign_up").hide();
            })
        </script>
    @endpush
@endsection
