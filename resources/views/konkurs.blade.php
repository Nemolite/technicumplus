<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- бутстрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- подключение стилей -->
    <link rel="stylesheet" href="{{ asset("public/css/style.css") }}">
    <!-- подключение шрифта -->
    <link rel="stylesheet" href="{{ asset("public/css/fonts.css") }}">
    <!-- подключение стилей для меню-->
    <link rel="stylesheet" href="{{ asset("public/css/menu.css") }}">
    <title>Home</title>
</head>
<body>
<div class="ob_block_fon_konkurs">
    <!-- блок верхний с изображением и наклоном внизу -->
    <div class="fon_block_konkurs"  style="background: url('{{ asset("image/2.png") }}') no-repeat center;"></div>
    <div class="glav_conteiner">
        <!-- навигационное меню и логотип -->
        <div class="object_menu">
            <!-- логотип -->
            <div class="logotip">
                <a href="/">Technicum<strong>Plus</strong></a>
            </div>
            <!-- неполное навигационное меню-->
            <div class="object_menu_str_menu">
                <ul>
                    <li><a href="{{ route('news') }}">Новости</a></li>
                    <li><a href="{{ route('konkurs') }}">Конкурсы</a></li>
                    <li><a href="{{ route('para') }}">Пары</a></li>
                    <li><a href="{{ route('proff') }}">Профессии</a></li>
                </ul>
            </div>
            <!-- полное навигационное меню-аккордион -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <p>•••</p>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="acordions">
                            <li><a class="menu" href="{{ route('news') }}">Новости</a></li>
                            <li><a class="menu" href="{{ route('konkurs') }}">Конкурсы</a></li>
                            <li><a class="menu" href="{{ route('para') }}">Пары</a></li>
                            <li><a class="menu" href="{{ route('proff') }}">Профессии</a></li>
                            <li><a class="menu" href="{{ route('people') }}">Наши люди</a></li>
                            <li><a class="menu" href="#">Контакты</a></li>
                            <li><a class="menu" href="#">Помощь</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="block">
    <div class="row">
        @foreach ($konkurs as $one_konkurs)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ asset('konkurs/'.$one_konkurs->id) }}">
                            <img src="{{ asset('public/storage/folder/'.$one_konkurs->url) }}" alt="{{ $one_konkurs->title }}">
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


</div>
</div>
<div class="zagolovk">
    <div class="fon">
        <div class="col-lg-4">
            <div class="krug_konkurs">
                <img src="{{ asset('public/storage/folder/'.$firstkonkurs->url) }}" alt="{{ $firstkonkurs->title }}">
            </div>
            <h2  class="zagolovk_konkurs">{{ $firstkonkurs->title }}</h2>
            <p class="information_konkurs">{{ $firstkonkurs->content }}</p>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
