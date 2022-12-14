<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- бутстрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- подключение стилей -->
    <link rel="stylesheet" href="{{ asset("public/css/para.css") }}">
    <link rel="stylesheet" href="{{ asset("public/css/menu.css") }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- подключение шрифта -->
    <link rel="stylesheet" href="{{ asset("public/css/fonts.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Пары</title>
</head>
<body>
<div class="ob_block_fon_para">
    <!-- блок верхний с изображением и наклоном внизу -->
    <div class="fon_block_para" style="background: url('{{ asset("/image/2.png") }}') no-repeat center;background-size: cover"></div>
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
    </div><!-- конец меню -->

    <div class="ob_block_raspis">
        <div class="block_fon_raspis">
            {{--начало блока курсов--}}
            <div class="block_raspis_kurs">
                <div class="kurs" id="fcurs1"><p>1 курс</p></div>
                <div class="kurs" id="fcurs2"><p>2 курс</p></div>
                <div class="kurs" id="fcurs3"><p>3 курс</p></div>
                <div class="kurs" id="fcurs4"><p>4 курс</p></div>
            </div>
        </div>
        <div class="ob_block_fon_raspis">
            <div class="block_respis_para">
                <h1>Расписание</h1>
                <div class="ob_raspis_par_ned">
                    <div class="nedely">
                        <p>пн</p>
                        <p>вт</p>
                        <p>ср</p>
                        <p>чт</p>
                        <p>пт</p>
                        <p>сб</p>
                    </div>

                    <!-- 1 курс -->
                    <div class="raspis_par_ned" id="outcurs1" style="display: block">
                        <div class="groop_">
                            @include('paraitem',['timetable' => $timetable11,'gr'=>'1ИП'])
                            @include('paraitem',['timetable' => $timetable12,'gr'=>'1БУ'])
                            @include('paraitem',['timetable' => $timetable13,'gr'=>'1ТО'])
                            @include('paraitem',['timetable' => $timetable14,'gr'=>'1ПК'])
                            @include('paraitem',['timetable' => $timetable15,'gr'=>'1 группа'])
                        </div>
                    </div>

                    <!-- 2 курс -->
                    <div class="raspis_par_ned" id="outcurs2" style="display: none">
                        <div class="groop_">
                            @include('paraitem',['timetable' => $timetable21,'gr'=>'2ИП'])
                            @include('paraitem',['timetable' => $timetable22,'gr'=>'2БУ'])
                            @include('paraitem',['timetable' => $timetable23,'gr'=>'2ТО'])
                            @include('paraitem',['timetable' => $timetable24,'gr'=>'2ПК'])
                            @include('paraitem',['timetable' => $timetable25,'gr'=>'2 группа'])
                        </div>
                    </div>

                    <!-- 3 курс -->
                    <div class="raspis_par_ned" id="outcurs3" style="display: none">
                        <div class="groop_">
                            @include('paraitem',['timetable' => $timetable31,'gr'=>'3ИП'])
                            @include('paraitem',['timetable' => $timetable32,'gr'=>'3БУ'])
                            @include('paraitem',['timetable' => $timetable33,'gr'=>'3ТО'])
                            @include('paraitem',['timetable' => $timetable34,'gr'=>'3ПК'])
                            @include('paraitem',['timetable' => $timetable35,'gr'=>'3 группа'])
                        </div>
                    </div>

                    <!-- 4 курс -->
                    <div class="raspis_par_ned" id="outcurs4" style="display: none">
                        <div class="groop_">
                            @include('paraitem',['timetable' => $timetable41,'gr'=>'4ИП'])
                            @include('paraitem',['timetable' => $timetable42,'gr'=>'4БУ'])
                            @include('paraitem',['timetable' => $timetable43,'gr'=>'4ТО'])
                            @include('paraitem',['timetable' => $timetable44,'gr'=>'4ПК'])
                            @include('paraitem',['timetable' => $timetable45,'gr'=>'4 группа'])
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="ob_block_raspis_zvonkov">
        <div class="block_respis_zvonki">
            <div class="respis_zvonki_zamen">
                <h1>Расписание звонков</h1>
                <div class="block_dni">
                    <div class="dni">
                        <p>ПН</p>
                        <p>ВТ</p>
                        <p>СР-ПТ</p>
                        <p>СБ</p>
                    </div>
                </div>

                <div class="para">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                </div>
                <div class="para_dni">
                    <p>9:00 - 10:10</p>
                    <p>10:20 - 11:30</p>
                    <p>11:50 - 13:00</p>
                    <p>14:10 - 15:20</p>
                    <p>15:30 - 16:40</p>
                    <p>16:50 - 18:00</p>
                </div>
                <div class="para_dni">
                    <p>8:00 - 9:20</p>
                    <p>9:40 - 11:00</p>
                    <p>11:20 - 12:35</p>
                    <p>13:05 - 14:20</p>
                    <p>14:40 - 16:00</p>
                    <p>16:20 - 17:40</p>
                </div>
                <div class="para_dni">
                    <p>8:00 - 9:20</p>
                    <p>9:40 - 11:00</p>
                    <p>11:20 - 12:35</p>
                    <p>13:05 - 14:20</p>
                    <p>14:40 - 16:00</p>
                    <p>16:20 - 17:40</p>
                </div>
                <div class="para_dni">
                    <p>8:00 - 9:00</p>
                    <p>9:10 - 10:10</p>
                    <p>10:20 - 11:20</p>
                    <p>11:30 - 12:30</p>
                    <p>12:40 - 13:40</p>
                    <p>13:50 - 14:50</p>
                </div>
            </div>
        </div>

        <div class="block_respis_zamen">
            <div class="respis_zvonki_zamen">
                <h1>Замены</h1>
                <div class="ob_block_zamen">
                    <div class="block_zamen">
                        <div class="gr_zamen"><h1>1ИП</h1></div>
                    </div>
                    <div class="block_zam">
                        <p>
                            У вас вместо 1 пары с Осиповой А.А
                            будет пара с Вушняковым С.В. 3 парой
                        </p>
                    </div>
                </div>
                <div class="ob_block_zamen">
                    <div class="block_zamen">
                        <div class="gr_zamen"><h1>1ИП</h1></div>
                    </div>
                    <div class="block_zam">
                        <p>
                            У вас вместо 1 пары с Осиповой А.А
                            будет пара с Вушняковым С.В. 3 парой
                        </p>
                    </div>
                </div>
                <div class="ob_block_zamen">
                    <div class="block_zamen">
                        <div class="gr_zamen"><h1>1ИП</h1></div>
                    </div>
                    <div class="block_zam">
                        <p>
                            У вас вместо 1 пары с Осиповой А.А
                            будет пара с Вушняковым С.В. 3 парой
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- бутстрап -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="public/js/para.js"></script>
<script src="public/js/slickslider.js"></script>

</body>
</html>
