<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-title" content="CodePen">
    <title>Наши люди</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/svgs/fi-list.svg">
    <!-- бутстрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- подключение стилей -->
 <link rel="stylesheet" href="{{ asset("public/css/style.css") }}">
    <!-- подключение шрифта -->
    <link rel="stylesheet" href="{{ asset("public/css/fonts.css") }}">
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body translate="no">

<div class="ob_block_fon">
    <!-- блок верхний с изображением и наклоном внизу -->
    <div class="fon_block" style="background: url('{{ asset("image/2.png") }}') no-repeat center;"></div>
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

        <div id="app" class="app">
        <!--
            <div data-reactroot="" id="carousel" class="noselect">
                <div class="arrow arrow-left">
                    <i class="fi-arrow-left"></i>
                </div>
                <span>
                      <div class="item level2">
                        <div><img src="" alt=""></div>
                        <div>
                          <p>Заголовок</p>
                          <p>Lorem Ipsum is a fish text often used in print and web design.
                            Lorem Ipsum has been the standard "fish" for Latin script texts since the early 16th century.
                             At the time, an unnamed printer created a large collection of font sizes and shapes, using Lorem Ipsum to print out samples.
                            Lorem Ipsum not only successfully survived five centuries without noticeable changes, but also stepped into electronic design.
                            It was popularized in modern times by the publication of Letraset sheets with Lorem Ipsum samples in the 60s and, more recently,
                             electronic layout programs such as Aldus PageMaker, which use Lorem Ipsum in their templates.
                          </p>
                        </div>
                      </div>
                      <div class="item level1">7</div>
                      <div class="item level0">8</div>
                      <div class="item level-1">9</div>
                      <div class="item level-2">10</div>
                </span>
                <div class="arrow arrow-right">
                    <i class="fi-arrow-right"></i>
                </div>
            </div>
            -->
        </div>

    </div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-with-addons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.min.js"></script>

    <script id="rendered-js">
        var ReactCSSTransitionGroup = React.addons.CSSTransitionGroup;
        class Carousel extends React.Component {
            constructor(props) {
                super(props);
                this.state = {
                    items: this.props.items,
                    active: this.props.active,
                    direction: 'www' };
                this.rightClick = this.moveRight.bind(this);
                this.leftClick = this.moveLeft.bind(this);
            }
            generateItems() {
                var items = [];
                var level;
                console.log(this.state.active);
                for (var i = this.state.active - 2; i < this.state.active + 3; i++) {if (window.CP.shouldStopExecution(0)) break;
                    var index = i;
                    if (i < 0) {
                        index = this.state.items.length + i;
                    } else if (i >= this.state.items.length) {
                        index = i % this.state.items.length;
                    }
                    level = this.state.active - i;
                    items.push( /*#__PURE__*/React.createElement(Item, { key: index, id: this.state.items[index], level: level }));
                }window.CP.exitedLoop(0);
                return items;
            }
            moveLeft() {
                var newActive = this.state.active;
                newActive--;
                this.setState({
                    active: newActive < 0 ? this.state.items.length - 1 : newActive,
                    direction: 'left' });

            }
            moveRight() {
                var newActive = this.state.active;
                this.setState({
                    active: (newActive + 1) % this.state.items.length,
                    direction: 'right' });
            }
            render() {
                return /*#__PURE__*/(
                    React.createElement("div", { id: "carousel", className: "noselect" }, /*#__PURE__*/
                        React.createElement("div", { className: "arrow arrow-left", onClick: this.leftClick }, /*#__PURE__*/React.createElement("i", { className: "fi-arrow-left" })), /*#__PURE__*/
                        React.createElement(ReactCSSTransitionGroup, {
                                transitionName: this.state.direction },
                            this.generateItems()), /*#__PURE__*/
                        React.createElement("div", { className: "arrow arrow-right", onClick: this.rightClick }, /*#__PURE__*/React.createElement("i", { className: "fi-arrow-right" }))));
            }}

        class Item extends React.Component {
            constructor(props) {
                super(props);
                this.state = {
                    level: this.props.level };
            }
            render() {
                const className = 'item level' + this.props.level;
                let itemid = 'itemid';
                let src = 'data:image/jpeg;base64,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';
                let alt = 'Альтернативный текст, но можно и текст заголовка';
                let ourContentTitle ='our_people_title'
                let ourContentText ='our_people_content'
                const classImgName = 'our_people_img'
                return (
                    React.createElement("div", { className: className, id:itemid},
                        [
                            React.createElement('div',{},[
                                React.createElement('img',{className: classImgName,src:src,alt:alt}),
                                React.createElement('h5',{className: ourContentTitle},'Заголовок'),
                                React.createElement('p',{className:ourContentText},'Поясняющий текст'),
                            ])

                        ]
                    ));
            }}
        var items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        ReactDOM.render( React.createElement(Carousel, { items: items, active: 0 }), document.getElementById('app'));
        //# sourceURL=pen.js
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

