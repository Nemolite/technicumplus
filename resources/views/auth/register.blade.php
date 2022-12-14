@extends('layouts.app')

@section('content')
<section class="vh-90" >
    <div class="container py-5 h-100" style="padding-top: 1rem!important;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="public/image/reg.jpg"
                                 alt="login form" class="img-fluid" style="max-width: 110%;
    height: 700px; border-radius: 1rem 0 0 1rem;"  />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #282828;"></i>
                                        <span class="h2 fw-bold mb-0" style="color: #282828;">Регистрация</span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Имя </label>
                                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email Адрес</label>
                                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Пароль</label>
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password-confirm">Подтвердите пароль</label>
                                        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                                    </div>


                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Зарегестрироваться</button>
                                    </div>
                                </form>

                                    <section class="py-5 text-center container" style="padding-top: 0rem!important;">
                                        <div class="row py-lg-5" style="padding-top: 1rem!important;">
                                            <div class="col-md-8 mx-auto">
                                                <h3 class="fw-light" style="font-size: x-large;">Вы еще не с нами?</h3>
                                                <p class="lead text-muted"> Тогда скорее <a href="{{ route('register') }}">присоединяйтесь</a></p>

                                            </div>
                                        </div>
                                    </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
