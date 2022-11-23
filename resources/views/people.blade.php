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
                    direction: '' };
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
                return /*#__PURE__*/(
                    React.createElement("div", { className: className },
                        this.props.id));
            }}
        var items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        ReactDOM.render( /*#__PURE__*/React.createElement(Carousel, { items: items, active: 0 }), document.getElementById('app'));
        //# sourceURL=pen.js
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

