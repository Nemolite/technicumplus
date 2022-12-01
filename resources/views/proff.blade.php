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
    <!-- подключение дополнительных стилей -->
    <link rel="stylesheet" href="{{ asset("public/css/proff.css") }}">
    <!-- подключение стилей для меню-->
    <link rel="stylesheet" href="{{ asset("public/css/menu.css") }}">
    <!-- подключение шрифта -->
    <link rel="stylesheet" href="{{ asset("public/css/fonts.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Профессии</title>
</head>
<body>
<div class="ob_block_fon_proff">
    <!-- блок верхний с изображением и наклоном внизу -->
    <div class="fon_block_proff" style="background: url('{{ asset("image/2.png") }}') no-repeat center;background-size: cover"></div>
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
                    <li><a href="#">Пары</a></li>
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
                            <li><a class="menu" href="#">Пары</a></li>
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
    <div class="ob_proff_class">
        <div class="proff_class">
            <div class="block_information_proff_l">
                <div class="information_proff_l1">
                    <h1 class="h1_proff">Программист</h1>
                    <p class="p_b_proff"> Cпециальность изучающая операционные системы, распределение баз данных, программное и информационное обеспечение компьютерных систем.
                        Вас научат составлять технические задания, создавать автоматизированные системы управления, проектировать и разрабатывать сайты</p>
                    <p class="l-1">Срок обучения: 3 годa 10 месяцев</p>
                    <p class="l-2">Кол-во мест:  25</p>
                </div>
                <div class="information_proff_l2">
                    <h1 class="h2_proff">Повар - кондитер</h1>
                    <p class="p_b_proff"> Профессия, где вы научитесь готовить различного рода десерты и кондитерские изделия в соответствии с рецептурой.
                        А так же, вас научат высокому уровню готовки широких ассортиментов блюд.</p>
                    <p class="l-1">Срок обучения: 3 годa 10 месяцев</p>
                    <p class="l-2">Кол-во мест:  25</p>
                </div>
                <div class="information_proff_l3">
                    <h1 class="h2_proff">Автомеханик</h1>
                    <p class="p_b_proff"> Профессия, где вы сможете научится ремонту и техническому обслуживанию автомобиля с помощью диагностического оборудования и приборов.
                        По выявленным характеристикам определять причины поломки, устранять или предупреждать об них. Так же, вы сможете научится полностью восстановливать разбитые машины.</p>
                    <p class="l-1">Срок обучения: 3 годa 10 месяцев</p>
                    <p class="l-2">Кол-во мест:  25</p>
                </div>
                <div class="information_proff_l4">
                    <h1 class="h2_proff">Бухгалтер</h1>
                    <p class="p_b_proff"> Cпециальность, с помощью которой, вы научитесь вести учет имущества и обязательств организации,
                        обрабатывать бухгалтерскую информацию, проведить расчеты с бюджетом и формировать бухгалтерскую отчетность.</p>
                    <p class="l-1">Срок обучения: 2 годa 10 месяцев</p>
                    <p class="l-2">Кол-во мест:  25</p>
                </div>
                <div class="information_proff_l5">
                    <h1 class="h1_proff">Строитель</h1>
                    <p class="p_b_proff"> Профессия где вы научитесь выполнять простейшие каменные, печные, электросварочные, монтажные, бетонные и погрузочные работы.
                        Кроме этого разбирать вручную фундаменты, кирпичные кладки, другие конструкции.</p>
                    <p class="l-1">Срок обучения: 2 годa 10 месяцев</p>
                    <p class="l-2">Кол-во мест:  25</p>
                </div>
            </div>
            <div class="menuli">
                <div class="toggle" style="background: white;">
                    <img src="{{ asset("public/image/proff/1.png") }}" style="background-size: cover;background-position: center;">
                </div>
                <li style="--i:2;">
                    <a href="" style="background: url('{{ asset("public/image/proff/1.jpg") }}');background-size: cover;background-position: center;" class="l1"></a>
                </li>
                <li style="--i:3;">
                    <a href="" style="background: url('{{ asset("public/image/proff/2.jpg") }}');background-size: cover;background-position: center;" class="l2"></a>
                </li>
                <li style="--i:4;">
                    <a href="" style="background: url('{{ asset("public/image/proff/3.jpg") }}');background-size: cover;" class="l3"></a>
                </li>
                <li style="--i:5;">
                    <a href="" style="background: url('{{ asset("public/image/proff/4.jpg") }}');background-size: cover;background-position: center;" class="l4"></a>
                </li>
                <li style="--i:6;">
                    <a href="" style="background: url('{{ asset("public/image/proff/5.jpg") }}');background-size: cover;" class="l5"></a>
                </li>
            </div>
        </div>
    </div>

</div>

<!-- бутстрап -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let toggle = document.querySelector('.toggle');
    let menu = document.querySelector('.menuli');
    toggle.onclick = function(){
        menu.classList.toggle('active')
    }
</script>
</body>
</html>
