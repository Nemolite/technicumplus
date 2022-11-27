@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('formnews')
    <h1>Форма ввода новостей</h1>
    <form action="{{ route('insertnews') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок новости</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок новости">
        </div>
        <div class="mb-3">
            <label for="txtnews" class="form-label">Текст новости</label>
            <textarea class="form-control" id="txtnews" name="txtnews" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formnews" class="form-label">Выберите файл изображения</label>
            <input class="form-control" type="file" id="formnews" name="formnews">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
@section('formourpeople')
    <h1>Форма ввода знаменитых людей</h1>
    <form action="{{ route('insertpeople') }}" method="post" enctype="multipart/form-data" id="forminsertpeople" name="forminsertpeople">
        @csrf
        <div class="mb-3">
            <label for="ourtitle" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="ourtitle" name="ourtitle" placeholder="Заголовок наши люди">
        </div>
        <div class="mb-3">
            <label for="ourtxt" class="form-label">Текст наши люди</label>
            <textarea class="form-control" id="ourtxt" name="ourtxt" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="fileourpeople" class="form-label">Выберите файл изображения для наших людей</label>
            <input class="form-control" type="file" id="fileourpeople" name="fileourpeople">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
