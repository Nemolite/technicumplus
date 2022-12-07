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
@section('formkonkurs')
    <h1>Форма ввода конкурсов</h1>
    <form action="{{ route('insertkonkurs') }}" method="post" enctype="multipart/form-data" id="forminsertkonkurs" name="forminsertkonkurs">
        @csrf
        <div class="mb-3">
            <label for="konkurstitle" class="form-label">Заголовок конкурса</label>
            <input type="text" class="form-control" id="konkurstitle" name="konkurstitle" placeholder="Заголовок конкурса">
        </div>
        <div class="mb-3">
            <label for="konkurstxt" class="form-label">Текст конкурса</label>
            <textarea class="form-control" id="konkurstxt" name="konkurstxt" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="filekonkurs" class="form-label">Выберите файл изображения для конкурса</label>
            <input class="form-control" type="file" id="filekonkurs" name="filekonkurs">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
@section('listnews')
    <h1>Вывод новостей, удаление и корректировка</h1>
    <table class="table-primary">
        <thead>
        <tr>
            <th scope="col">№пп</th>
            <th scope="col">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Текст</th>
            <th scope="col">Корректировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($news as $one_news)
            <tr>
                <th scope="row">{{ $loop->index }}</th>
                <td>{{ $one_news->id }}</td>
                <td>{{ $one_news->title }}</td>
                <td>{{ $one_news->content }}</td>
                <td>
                    <a href="{{ asset('editnews/'.$one_news->id) }}">Изменить</a>
                </td>
                <td>
                    <a href="{{ asset('deletenews/'.$one_news->id) }}">Удалить</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection
@section('listourpeople')
    <h1>Вывод знаменитых людей, удаление и корректировка</h1>
    <table class="table-primary">
        <thead>
        <tr>
            <th scope="col">№пп</th>
            <th scope="col">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Текст</th>
            <th scope="col">Корректировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ourpeople as $one_ourpeople)
            <tr>
                <th scope="row">{{ $loop->index }}</th>
                <td>{{ $one_ourpeople->id }}</td>
                <td>{{ $one_ourpeople->title }}</td>
                <td>{{ $one_ourpeople->content }}</td>
                <td>
                    <a href="{{ asset('editourpeople/'.$one_ourpeople->id) }}">Изменить</a>
                </td>
                <td>
                    <a href="{{ asset('deleteop/'.$one_ourpeople->id) }}">Удалить</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection

<!-- Вывод конкурсов, удаление и корректировка-->
@section('listkonkurs')
    <h1>Вывод конкурсов, удаление и корректировка</h1>
    <table class="table-primary">
        <thead>
        <tr>
            <th scope="col">№пп</th>
            <th scope="col">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Текст</th>
            <th scope="col">Корректировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($konkurs as $one_konkurs)
            <tr>
                <th scope="row">{{ $loop->index }}</th>
                <td>{{ $one_konkurs->id }}</td>
                <td>{{ $one_konkurs->title }}</td>
                <td>{{ $one_konkurs->content }}</td>
                <td>
                    <a href="{{ asset('editkonkurs/'.$one_konkurs->id) }}">Изменить</a>
                </td>
                <td>
                    <a href="{{ asset('deletekonkurs/'.$one_konkurs->id) }}">Удалить</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection
