@extends('basa')
    @section('information')
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
    @endsection
@section('block2')
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
@endsection



