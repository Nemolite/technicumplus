@extends('layouts.app')

@section('wrapper')
<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin') }}" class="brand-link">
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
                        </div>
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
                        </div>
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
                        </div>
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
                        </div>

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
                        </div>
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
                        </div>
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
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
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
