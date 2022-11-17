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
    <title>Home</title>
</head>
<body >
<div class="ob_glav_block">
    <!-- блок верхний с изображением и наклоном внизу -->
    <div class="glav_block" style="background: url('{{ asset("public/image/1.png") }}') no-repeat center;"></div>
    <!-- контейнер -->
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
                    <li><a href="/">Новости</a></li>
                    <li><a href="/">Конкурсы</a></li>
                    <li><a href="/">Пары</a></li>
                    <li><a href="/">Профессии</a></li>
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
                            <li><a class="menu" href="#">Новости</a></li>
                            <li><a class="menu" href="#">Конкурсы</a></li>
                            <li><a class="menu" href="#">Пары</a></li>
                            <li><a class="menu" href="#">Профессии</a></li>
                            <li><a class="menu" href="#">Наши люди</a></li>
                            <li><a class="menu" href="#">Контакты</a></li>
                            <li><a class="menu" href="#">Помощь</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- начало информации в блоке -->
        <div class="glav_information">
            <div class="text">
                <h1>Обучение - </h1><h1>В <i> отличном </i>месте?</h1>
            </div>
        </div>
        <div class="information">
            <div class="image">
                <img src="{{ asset("public/image/t.png") }}" alt="">
            </div>
        </div>
        <!-- Конец информации в блоке -->
    </div>
    <!-- конец контейнера меню -->
</div>
<div class="ob_glav_block2">
    <div class="glav_block2">
        <div class="glav_block2_conteiner">
            <div class="ob_block_information">
                <div class="block_image">
                    <div class="krug">
                        <img src="{{ asset("public/image/i.png") }}" alt="">
                    </div>
                </div>
                <div class="glav_block2_information">
                    <h1>Почему именно мы?</h1>
                    <p> А всё очень просто, потому что именно мы
                        можем обучить тебя или твоего ребенка
                        интересной и востребованной профессии!   </p>
                    <button>Подробнее</button>
                </div>
            </div>

            <div class="footer">
                <div class="footer_logo">
                    <div class="footer_logotip">
                        <a href="/">Technicum<strong>Plus</strong></a>
                    </div>
                </div>
                <div class="footer_adress">
                    <div class="adress">
                        <p><strong>Adress: </strong> 429120, Чувашская Республика г. Шумерля</p>
                    </div>
                </div>
                <div class="footer_sotseti">
                    <div class="sotseti">
                        <img src="{{ asset("public/image/telegram.png") }}" alt="" width="36" height="30">
                        <img src="{{ asset("public/image/vk.png") }}" alt="" width="36" height="35">
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- бутстрап -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
