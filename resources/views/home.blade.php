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
<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
            <img src="public/image/i.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Technicumplus</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-header">Контент</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p id="anews">
                                Новости
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p id="aour">
                                Знаменитые люди
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p id="akon">
                                Конкурсы
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Панель управления</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <!--
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v3</li>
                            -->
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- Новости -->
        <section class="content" id="cnews" style="display: block;">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Добавление новостей</h3>
                            </div>
                            <!-- /.card-header -->

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
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Корректировка новостей</h3>
                            </div>
                            <!-- /.card-body -->

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
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $one_news->id }}</td>
                                    <td>{{ $one_news->title }}</td>
                                    <td>{{ Str::limit($one_news->content,20,' (...)' ) }}</td>
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
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- Знаменитые люди -->
        <section class="content" id="cour" style="display: none;">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Добавление знаменитых людей</h3>
                            </div>
                            <!-- /.card-header -->

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
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Корректировка знаментитых людей</h3>
                            </div>
                            <!-- /.card-body -->


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
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $one_ourpeople->id }}</td>
                                    <td>{{ $one_ourpeople->title }}</td>
                                    <td>{{ Str::limit($one_ourpeople->content,20,' (...)' ) }}</td>
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
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- Конкурсы -->
        <section class="content" id="ckon" style="display: none;">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Добавление конкурсов</h3>
                            </div>
                            <!-- /.card-header -->

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
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Корректировка конкурсов</h3>
                            </div>
                            <!-- /.card-body -->

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
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $one_konkurs->id }}</td>
                                    <td>{{ $one_konkurs->title }}</td>
                                    <td>{{ Str::limit($one_konkurs->content,20,' (...)' ) }}</td>
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
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- *********************************************************************** -->
        <!-- *********************************************************************** -->
        <!-- Расписание -->

        <section class="content timetable empty-top" id="ckurs1">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Заполнение расписание</h3>
                            </div>
                            <!-- /.card-header -->

                            <form action="{{ route('timetable') }}" method="post" enctype="multipart/form-data" id="formckurs1" name="formckurs1">
                                @csrf

                                <p>Для загрузки ввода данных и их корректировки необходимо выбрать курс и выбрать группу</p>
                                <p>Выберите курс:</p>
                                <div>
                                    <input type="radio" id="curs1"
                                           name="formcurs" value="1">
                                    <label for="curs1">1 курс</label>

                                    <input type="radio" id="curs2"
                                           name="formcurs" value="2">
                                    <label for="curs2">2 курс</label>

                                    <input type="radio" id="curs3"
                                           name="formcurs" value="3">
                                    <label for="curs3">3 курс</label>

                                    <input type="radio" id="curs4"
                                           name="formcurs" value="4">
                                    <label for="curs4">4 курс</label>
                                </div>
                                <p>Выберите группу:</p>
                                <div class="col-md-2">
                                    <select class="form-select" name="formgr" id="formgr">
                                        <option value="0" selected>Группа не выбрана</option>
                                        <option value="1">1ИП</option>
                                        <option value="2">1БУ</option>
                                        <option value="3">1ТО</option>
                                    </select>
                                </div>
                                <input type="hidden" name="load" value="on">
                                <button type="submit"class="btn btn-success">Загрузить</button>
                            </form>

                        <form action="{{ route('timetable') }}" method="post" enctype="multipart/form-data" id="formckurs1" name="formckurs1">
                            @csrf

                            <p>Для сохранения данных необходимо выбрать курс и выбрать группу</p>
                            <p>Выберите курс:</p>
                            <div>
                                <input type="radio" id="curs1"
                                       name="formcurs" value="1">
                                <label for="curs1">1 курс</label>

                                <input type="radio" id="curs2"
                                       name="formcurs" value="2">
                                <label for="curs2">2 курс</label>

                                <input type="radio" id="curs3"
                                       name="formcurs" value="3">
                                <label for="curs3">3 курс</label>

                                <input type="radio" id="curs4"
                                       name="formcurs" value="4">
                                <label for="curs4">4 курс</label>
                            </div>
                            <p>Выберите группу:</p>
                            <div class="col-md-2">
                                <select class="form-select" name="formgr" id="formgr">
                                    <option value="0" selected>Группа не выбрана</option>
                                    <option value="1">1ИП</option>
                                    <option value="2">1БУ</option>
                                    <option value="3">1ТО</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h3>Понедельник</h3>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Пары</th>
                                            <th scope="col">Предметы</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input type="text" name="pred11" id="pred11" value="{{ $val['pred11'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input type="text" name="pred12" id="pred12" value="{{ $val['pred12'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <input type="text" name="pred13" id="pred13" value="{{ $val['pred13'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <input type="text" name="pred14" id="pred14" value="{{ $val['pred14'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <input type="text" name="pred15" id="pred15" value="{{ $val['pred15'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <input type="text" name="pred16" id="pred16" value="{{ $val['pred16'] }}">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                    <h4>Вторник</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Пары</th>
                                            <th scope="col">Предметы</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input type="text" name="pred21" id="pred21" value="{{ $val['pred21'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input type="text" name="pred22" id="pred22" value="{{ $val['pred21'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <input type="text" name="pred23" id="pred23" value="{{ $val['pred23'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <input type="text" name="pred24" id="pred24" value="{{ $val['pred24'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <input type="text" name="pred25" id="pred25" value="{{ $val['pred25'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <input type="text" name="pred26" id="pred26" value="{{ $val['pred26'] }}">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                    <h4>Среда</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Пары</th>
                                            <th scope="col">Предметы</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input type="text" name="pred31" id="pred31" value="{{ $val['pred31'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input type="text" name="pred32" id="pred32" value="{{ $val['pred32'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <input type="text" name="pred33" id="pred33" value="{{ $val['pred33'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <input type="text" name="pred34" id="pred34" value="{{ $val['pred34'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <input type="text" name="pred35" id="pred35" value="{{ $val['pred35'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <input type="text" name="pred36" id="pred36" value="{{ $val['pred36'] }}">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                    <h4>Четверг</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Пары</th>
                                            <th scope="col">Предметы</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input type="text" name="pred41" id="pred41" value="{{ $val['pred41'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input type="text" name="pred42" id="pred42" value="{{ $val['pred42'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <input type="text" name="pred43" id="pred43" value="{{ $val['pred43'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <input type="text" name="pred44" id="pred44" value="{{ $val['pred44'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <input type="text" name="pred45" id="pred45" value="{{ $val['pred45'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <input type="text" name="pred46" id="pred46" value="{{ $val['pred46'] }}">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                    <h4>Пятница</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Пары</th>
                                            <th scope="col">Предметы</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input type="text" name="pred51" id="pred51" value="{{ $val['pred51'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input type="text" name="pred52" id="pred52" value="{{ $val['pred52'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <input type="text" name="pred53" id="pred53" value="{{ $val['pred53'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <input type="text" name="pred54" id="pred54" value="{{ $val['pred54'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <input type="text" name="pred55" id="pred55" value="{{ $val['pred55'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <input type="text" name="pred56" id="pred56" value="{{ $val['pred56'] }}">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2">
                                    <h4>Суббота</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Пары</th>
                                            <th scope="col">Предметы</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input type="text" name="pred61" id="pred61" value="{{ $val['pred61'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input type="text" name="pred62" id="pred62" value="{{ $val['pred62'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <input type="text" name="pred63" id="pred63" value="{{ $val['pred63'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <input type="text" name="pred64" id="pred64" value="{{ $val['pred64'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <input type="text" name="pred65" id="pred65" value="{{ $val['pred65'] }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <input type="text" name="pred66" id="pred66" value="{{ $val['pred66'] }}">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                            <input type="hidden" name="save" value="on">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- *********************************************************************** -->
        <!-- *********************************************************************** -->
        <!-- Завершение блока расписание -->



        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-
            @php
                echo date('Y');
            @endphp
            <a href="http://technicumplus.shumpoliteh.ru/">Technicumplus</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 2.1.4
        </div>
    </footer>
</div>
<!-- ./wrapper -->
@endsection
