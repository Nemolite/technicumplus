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
    <h1>Форма ввода новостей (временная)</h1>
    <form action="{{ route('insertnews') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок новости</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок новости">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Текст новости</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formnews" class="form-label">Выберите файл изображения</label>
            <input class="form-control" type="file" id="formnews" name="formnews">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
