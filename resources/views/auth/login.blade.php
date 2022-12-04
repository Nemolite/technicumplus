@extends('layouts.app')

@section('content')
<section class="vh-100" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://s3-alpha-sig.figma.com/img/69ec/adba/3857e474325f75843f8b9dd8af8840b3?Expires=1670803200&Signature=XVJ8XMerlduHvlw2yADgCChK-pc461O5fa2pfDzDQDZdOx47xOgFZJoLR~vqrP2Sa8svD6ytrRsAMKYSta59cd~eWOWb6zRvlQ2WmmJxTpK3KskjqK8PZmTUIXaNaDtWp85-zxGymrumLPkl-vj3LV4oC--V130lhOTDBMgKrAwIkwhehafZ5EIVtq62Qth5ZEqyA9uJLInc2fbS9aIOFW0PYcG5gk7n9~YZ1NeOPQTqQBkuRivue49VyyiYPFzwynnO2J63KoRx0JRDTCyoPEIOGK8JR42lVOdqCfAx9KWNfqFCH2EY8ZN1oQJfwOnnYMt0UkQdYLidZEP2HXQKVQ__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
                                 alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h2 fw-bold mb-0" style="color: white">Авторизация</span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label" for="email">Логин (Email Address) </label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        <label class="form-label" for="password">Пароль</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Запомнить') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="button">Войти</button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Забыл пароль?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                                    <section class="py-5 text-center container">
                                        <div class="row py-lg-5">
                                            <div class="col-lg-6 col-md-8 mx-auto">
                                                <h3 class="fw-light">Вы еще не с нами?</h3>
                                                <p class="lead text-muted"> Тогда скорее <a href="{{ route('register') }}">присоединяйтесь</a></p>

                                            </div>
                                        </div
</section>
@endsection
