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
        <script>
            var our = [];
            var ourstruc = []
        </script>
        @foreach ($ourpeople as $one_ourpeople)
            <script>
                console.log('{{ $one_ourpeople->title }}');
                ourstruc = [
                    "{{ $one_ourpeople->title }}",
                    "{{ $one_ourpeople->content }}",
                    "{{ asset('public/storage/folder/'.$one_ourpeople->url) }}"
                ]
                our.push(ourstruc);
            </script>
        @endforeach
        <div id="app" class="app">
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
                };
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

                    console.log(our);
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
                let src = this.props.id[2]; // url
                let alt = this.props.id[0]; // title
                let ourContentTitle ='our_people_title'
                let ourContentText ='our_people_content'
                const classImgName = 'our_people_img'
                return (
                    React.createElement("div", { className: className, id:itemid},
                        [
                            React.createElement('div',{},[
                                React.createElement('img',{className: classImgName,src:src,alt:alt}),
                                React.createElement('h5',{className: ourContentTitle},this.props.id[0]),
                                React.createElement('p',{className:ourContentText},this.props.id[1]),
                            ])

                        ]
                    ));
            }}
        var items = our;
        ReactDOM.render( React.createElement(Carousel, { items: items, active: 0 }), document.getElementById('app'));
        //# sourceURL=pen.js
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

