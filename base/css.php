<!--CSS-->
<ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Отображение на всю ширину</div>
                    <div class="collapsible-body">
                            <pre data-enlighter-language="html">
<meta name="viewport" content="width=device-width">
                            </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Директива @media</div>
                    <div class="collapsible-body">
                        <pre data-enlighter-language="css">
@media screen and (min-width: 50em) {
    /* стили */
}
                        </pre>
                        <div class="card-panel">
                            Директива <b>@media</b> сообщает браузеру о начале медиа-запроса, компонент screen сообщает
                            браузеру, что правила должны применяться ко всем типам экранов, и компонент and <b>(min-width: 50em)</b> сообщает
                            браузеру, что правила должны действовать для всех окон просмотра, чья ширина превышает <b>50 em</b>.
                        </div>
                        <pre data-enlighter-language="css">
@media тип носителя 1 and (условие) {
    Описание стиля для типа носителя 1
}

@media тип носителя 2 and (условие){
    Описание стиля для типа носителя 2
}
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">@media и @import</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
В CSS для указания типа носителей применяются команды <b>@import</b> и <b>@media</b>, с помощью
которых можно определить стиль для элементов в зависимости от того, выводится документ на экран или на
принтер.
                        </div>
                        <pre data-enlighter-language="css">
@import url("имя файла") типы носителей;
@import "имя файла" типы носителей;

@import url("style/header.css"); /*Импортирование стилей*/

@import "/style/main.css" screen; /* Стиль для вывода результата на монитор*/
@import "/style/smart.css" print, handheld; /* Стиль для печати и смартфона*/
                        </pre>

                        <h5>2й тип подключения</h5>
                        <pre data-enlighter-language="html">
<link media="print, handheld" rel="stylesheet" href="print.css"> - подкл. стиля для печати и смартфона
<link media="screen" rel="stylesheet" href="main.css"> - подкл. стиля для экрана монитора
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Синтаксис медиа запроса</div>
                    <div class="collapsible-body">
                            <pre data-enlighter-language="css">
body {
    background-color: grey;
}

@media screen and (min-width: 320px) {
    body {
        background-color: green;
    }
}

@media screen and (min-width: 550px) {
    body {
        background-color: yellow;
    }
}

@media screen and (min-width: 768px) {
    body {
        background-color: orange;
    }
}

@media screen and (min-width: 960px) {
    body {
        background-color: red;
    }
}
                        </pre>
                        <div class="card-panel">
                            Для условной загрузки таблиц стилей в существующую таблицу стилей можно использовать также
                            CSS-конструкцию
                            <b>@import</b>. Например, следующий код импортирует таблицу стилей под названием phone.css при
                            условии, что устройством является экран с максимальной шириной окна просмотра 360 пикселов:
                            <b>@import url(&quot;phone.css&quot;) screen and (max-width:360px);</b>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Типы медиа запросов</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <b>width:</b> — ширина окна просмотра;<br>
                            <b>height:</b> — высота окна просмотра;<br>
                            <b>device-width:</b> — ширина поверхности отображения (для нас это, как правило, ширина экрана
                            устройства);<br>
                            <b>device-height:</b> — высота поверхности отображения (для нас это, как правило, высота экрана
                            устройства);<br>
                            <b>orientation:</b> — возможность проверки портретной или альбомной ориентации устройства;<br>
                            <b>aspect-ratio:</b> — соотношение ширины к высоте на основе ширины и высоты окна просмотра.
Дисплей с соотношением сторон 16:9 может быть описан как aspectratio: 16/9;<br>
                            <b>device-aspect-ratio:</b> — эта возможность аналогична предыдущей, но основывается на ширине и
                            высоте не окна просмотра, а поверхности отображения устройства;<br>
                        </div>
                        <pre data-enlighter-language="css">
@import url("имя файла") типы носителей;
@import "имя файла" типы носителей;

@import url("style/header.css"); /*Импортирование стилей*/

@import "/style/main.css" screen; /* Стиль для вывода результата на монитор*/
@import "/style/smart.css" print, handheld; /* Стиль для печати и смартфона*/
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Селекторы по атрибуту</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            Многие теги различаются по своему действию в зависимости от того, какие в них используются
                            атрибуты. Например, тег <b>&lt;input&gt;</b> может создавать кнопку, текстовое поле и другие элементы
                            формы всего лишь за счёт изменения значения атрибута type. При этом добавление правил стиля к селектору INPUT
                            применит стиль одновременно ко всем созданным с помощью этого тега элементам. Чтобы гибко управлять стилем
                            подобных элементов, в CSS введены селекторы атрибутов. Они позволяют установить стиль по присутствию
                            определённого атрибута тега или его значения.
                        </div>
                        <pre data-enlighter-language="css">
img[alt] /*выбор элемента IMG с атрибутом ALT*/
input [type=”text”]’) /*выбор инпута с текстовым полем*/
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Отношение селекторов</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <b>div p</b> – элементы p, являющиеся потомками div.<br>
                            <b>div > p</b> – только непосредственные потомки<br>
                            <b>div ~ p</b> – правые соседи: все p на том же уровне вложенности, которые идут после div.<br>
                            <b>div + p</b> – первый правый сосед: p на том же уровне вложенности, который идёт сразу после
                            div.<br>
                        </div>
                        <pre data-enlighter-language="css">
#languages li {
    color: brown;   /* потомки #languages, подходящие под селектор  LI */
}

#languages > li {
     color: black;   /* первый уровень детей #languages подходящих под LI */
}

#e-slavic ~ li {  /* правые соседи #e-slavic с селектором LI */
    color: red;
}

#latvian {
    font-style: italic;
}

#latvian * {      /* потомки #latvian, подходяще под * (т.е. любые) */
    font-style: normal;
}

#latvian + li {  /* первый правый сосед #latvian с селектором LI */
    color: green;
}
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Псевдоэлементы</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            Псевдоэлементы позволяют задать стиль элементов не определённых в дереве элементов документа, а
                            также генерировать содержимое, которого нет в исходном коде текста. Синтаксис использования
                            псевдоэлементов следующий.
                        </div>
                        <h5>Селектор:Псевдоэлемент { Описание правил стиля }</h5>
                        <pre data-enlighter-language="css">
.foo:first-letter { color: red }
.foo:first-line {font-style: italic}
                        </pre>
                        <div class="card-panel">
                            <b>::after</b> применяется для вставки назначенного контента после содержимого элемента.<br>
                            <b>::before</b> вставляет контент до содержимого элемента.<br>
                            <b>:first-letter</b> определяет стиль первого символа в тексте элемента, к которому добавляется.
Это позволяет создавать в тексте буквицу и выступающий инициал.<br>
                            <b>:first-line</b> определяет стиль первой строки блочного текста. Длина этой строки зависит от
                            многих факторов, таких как используемый шрифт, размер окна браузера, ширина блока, языка и т.д.<br>
                            <b>:hover</b> определяет стиль при наведении указателя<br>
                            <b>:not(селектор)</b> все, кроме подходящих под селектор.<br>
                            <b>:focus</b> в фокусе.<br>
                            <b>:empty</b> без детей (даже без текстовых).<br>
                            <b>:checked, :disabled, :enabled</b> состояния INPUT.<br>
                            <b>:target</b> этот фильтр сработает для элемента, ID которого совпадает с анкором #... текущего URL.<br>
<b>input:required {</b> стили для необходимых к заполнению полей <b>}</b>
                        </div>
                        <pre data-enlighter-language="css">
.CardLink_Spades:before {
    content: "♠";
}
.CardLink_Diamonds:before {
    content: "♦";
}
@media (min-width: 300px) {
    .CardLink:before {
        display: block;
    }
}
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Структурные элементы, псевдо-классы</div>
                    <div class="collapsible-body">
                        <b>:last-child</b> и <b>:first-child</b> – выбор стиля для последнего/первого элемента списка (nav, list, table)
<pre data-enlighter-language="css">
/*Примеры для меню:*/
@media (min-width: 60rem) {
    .nav-Wrapper {
        display: flex;
    }
    .nav-Link:last-child {
        margin-left: auto;
    }
}
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Селектор nth-child</div>
                    <div class="collapsible-body">
                        <p>HTML</p>
                        <pre data-enlighter-language="html">
                                <nav class="nav-Wrapper">
                                    <a href="/home" class="nav-Link">Home</a>
                                    <a href="/About" class="nav-Link">About</a>
                                    <a href="/Films" class="nav-Link">Films</a>
                                    <a href="/Forum" class="nav-Link">Forum</a>
                                    <a href="/Contact-Us" class="nav-Link nav-LinkLast">Contact Us</a>
                                </nav>
                            </pre>
                        <h5>CSS</h5>
                        <pre data-enlighter-language="css">
/*Стили для каждого второго элемента:*/
.nav-Link:nth-child(odd) {
    /* Стили */
}
/*Стили для каждого первого элемента*/
.nav-Link:nth-child(even) {
    /* Стили */
}
                        </pre>
                        <b>:last-child</b> и <b>:first-child</b> – выбор стиля для последнего/первого элемента списка (nav, list, table)
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">nth-правила</div>
                    <div class="collapsible-body">
                        <pre data-enlighter-language="css">
nth-child(n);
nth-last-child(n);
nth-of-type(n);
nth-last-of-type(n).
                        </pre>
                        <div class="card-panel">
                            Где <b>n</b> может быть в виде целого числа, например <b>:nth-child(2)</b>, что приведет к выбору второго элемента.
                            В виде числового выражения, например: <b>nth-child(3n+1)</b>, благодаря чему выбор начнется с
                            первого элемента и продолжится выбором каждого третьего элемента. Из соображений практичности при
                            разборе выражения в скобках я начну с правого края. К примеру, если я хочу определить, что будет выбрано
                            с помощью выражения <b>(2n + 3)</b>, то начинаю с крайнего справа числа (число 3 указывает на
                            третий элемент слева) и знаю, что наряду с ним, начиная с его позиции, будет выбран каждый второй элемент. А как
                            выбрать каждый последующий элемент, начиная со второго? Хотя можно воспользоваться кодом
                            <b>:nth-child(1n+2)</b>,
                            первая цифра вообще-то не нужна, посколь-ку, если не утверждается ничто иное, переменная n равна единице.
                            Поэтому можно просто написать <b>:nth-child(n+2)</b>. По аналогии с этим, если нам нужно выбрать
                            каждый третий элемент, вместо записи <b>:nth-child(3n+3)</b> можно просто указать <b>:nth-child(3n)</b>,
                            поскольку каждый третий элемент все равно будет начинаться с третьего элемента и нет необходимости указывать именно на него.
                            Разница между <b>nth-child</b> и <b>nth-last-child</b> заключается в том, что вариант
                            <b>nth-last-child</b>работает в
                            противоход распространению дерева документа. Например, <b>:nth-last-child(-n+3)</b> начинает выбор с
                            3 конца, а затем выбирает все элементы после него.
                            Селекторы <b>:nth-of-type</b> и <b>:nth-last-of-type</b>. В предыдущих примерах вычисление шло в
                            отношении всех дочерних элементов независимо от их типа (следует твердо усвоить, что селектор <b>nth-child</b>
                            нацеливается на все дочерние элементы одного и того же DOM-уровня независимо от их классов),
                            а вот селекторы <b>:nth-of-type</b> и <b>:nth-last-of-type</b> позволяют указывать тип подлежащих выбору элементов.
                        </div>
                        <pre data-enlighter-language="css">
span-class:nth-of-type(-2n+3) {
    background-color: #f90;
        border-radius: 50%;
    }
/*действие нацелено только на span элементы*/
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Метатег viewport</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            Метатег viewport добавляется в <b>&lt;head&gt;</b>-теги кода HTML. Он может настраивать-ся на
                            определенную
                            ширину (которую, к примеру, можно выразить в пикселах) или содержать указание на масштаб,
                            например 2.0(удваивание текущего размера). Рассмотрим пример использования метатега viewport,
                            настраивающего вывод в браузере в удвоенном по сравнению с исходным размере (200 %):
                        </div>
                        <pre data-enlighter-language="html">
                            <meta name="viewport" content="initial-scale=2.0 width=device-width"/>
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Flexbox</div>
                    <div class="collapsible-body">
                        <pre data-enlighter-language="css">
.CenterMe {
    /* другие свойства */
    display: flex;
    align-items: center;
    justify-content: center;
                        </pre>
                        <div class="card-panel">
                            <b>display: flex</b> — простая настройка элемента на его принадлежность к Flexbox (в
                            противоположность блоку-контейнеру, линейному блоку и т. д.).<br>
                            <b>align-items</b> — это свойство приводит к выравниванию элементов внутри Flexbox по поперечной
                            оси (в нашем примере текст выравнивается по вертикали).<br>
                            <b>justify-content</b> — это свойство задает выравнивание содержимого по центру главной оси. Что
                            касается строки Flexbox, то об этом свойстве можно думать как о кнопке в текстовом процессоре,
                            выравнивающей текст по левому или правому краю или по центру<br>
                            <b>display: inline-flex</b> – отображение в одну строчку.<br>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Позиционирование position</div>
                    <div class="collapsible-body">
                        <pre data-enlighter-language="css">
    position: absolute | fixed | relative | static | inherit
                        </pre>
                        <div class="card-panel">
                            <b>absolute</b> - указывает, что элемент абсолютно позиционирован, при этом другие элементы
                            отображаются на веб-странице словно абсолютно позиционированного элемента и нет. Положение элемента задается
                            свойствами left, top, right и bottom, также на положение влияет значение
                            свойства position родительского элемента. Так, если у родителя значение position установлено как static или родителя нет, то
                            отсчет координат ведется от края окна браузера. Если у родителя значение position задано
                            как fixed, relative или absolute, то отсчет координат ведется от края родительского
                            элемента.<br>
                            <b>fixed</b> - по своему действию это значение близко к absolute, но в отличие от него
                            привязывается к указанной свойствами left, top, right и bottom точке на экране и не меняет своего положения при
                            прокрутке веб-страницы. Браузер Firefox вообще не отображает полосы прокрутки, если положение
                            элемента задано фиксированным, и оно не помещается целиком в окно браузера.<br>
                            <b>relative</b> - положение элемента устанавливается относительно его исходного места.
                            Добавление свойств left, top, right и bottom изменяет позицию элемента и сдвигает его в ту или иную сторону
                            от первоначального расположения.<br>
                            <b>static</b> - элементы отображаются как обычно. Использование
                            свойств left, top, right и bottom не приводит к каким-либо результатам.<br>
                            <b>inherit</b> - наследует значение родителя.
                        </div>
                    </div>

                <li>
                    <div class="collapsible-header">Разбивка элементов в колонки</div>
                    <div class="collapsible-body">
                        <pre data-enlighter-language="css">
/*Ширина колонок*/
main {
    column-width: 12em;
}
/*Фиксировать кол-во колонок*/
main {
    column-count: 4;
}
/*Добавление промежутков*/
main {
    column-gap: 2em;
    column-rule: thin dotted #999;
    column-width: 12em;
}
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">АНТИМАЦИЯ CSS</div>
                    <div class="collapsible-body">
                        CSS-переходы (<b>transitions</b>) - с одного состояние в другое, при наличии обоих<br>
                        CSS-преобразований (<b>transforms</b>) с одного состояние в другое по координатам<br>
                        CSS-анимации (<b>animations</b>)<br>
                        <h5>Аинимированое меню</h5>
                        <p>HTML</p>
                        <pre data-enlighter-language="html">
                            <nav>
                                <a href="#">link1</a>
                                <a href="#">link2</a>
                                <a href="#">link3</a>
                                <a href="#">link4</a>
                                <a href="#">link5</a>
                            </nav>
                        </pre>
                        <p>CSS</p>
                        <pre data-enlighter-language="css">
a {
    font-family: "Arial Black";
    text-indent: 1rem;
    background-color: #ccc;
    display: inline-flex; /*отображать в строчку*/
    flex: 1120%;
    align-self: stretch;
    align-items: center;
    text-decoration: none;
    transition: box-shadow 1s; /*появление внутренней тени*/
}
a+a{
    border-left: 1px;
}
a:hover{
    box-shadow: inset 0 -3px 0 #CC3232; /*тень при наведении*/
}
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Свойства переходов transition</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <b>transition-property</b> — название CSS-свойства, подвергаемого переходу (напри-мер, <b>background-color, text-shadow</b> или название любого другого доступного для применения переходов свойства);
                            <b>transition-duration</b> — время, за которое должен произойти переход (определенное в
                            секундах, например 3s, 2s или 1.5s);
                            <b>transition-timing-function</b> — порядок изменения скорости в процессе перехода (например,
                            <b>ease, linear, ease-in, ease-out, ease-in-out или cubic-bezier</b>);
                            <b>transition-delay</b> — дополнительное значение для указания задержки до начала перехода. Как
                            вариант, может использоваться отрицательное значение для немедленного начала перехода, но уже с того момента,
                            до которого переход дошел бы за указанное время. Определяется в секундах, например 3s, 1s или 2.5s.
                        </div>
                        <pre data-enlighter-language="css">
transition-property: all;
transition-duration: 1s;
transition-timing-function: ease;
transition-delay: 0s;

/*Краткий формат*/
transition: all 1s ease 0s;

/*Различные свойства за разное время*/
transition-property: border, color, text-shadow;
transition-duration: 2s, 3s, 8s;
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Модуль transform</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <b>scale</b> — используется для масштабирования элемента (его увеличения или уменьшения)<br>
                            <b>translate</b> — перемещает элемент по экрану (вверх, вниз, влево и вправо)<br>
                            <b>rotate</b> — вращает элемент на определенную величину, указанную в градусах<br>
                            <b>skew</b> — используется для наклона элемента по его координатам x и y<br>
                            <b>matrix</b> — позволяет выполнять перемещения и придавать форму преобразованиям с точностью до
                            пиксела.<br>
                        </div>
                        <pre data-enlighter-language="css">
.scale:hover{
    transform: scale(1.4);
}
.rotate:hover {
    transform: rotate(30deg);
}
.skew:hover {
    transform: skew(40deg, 12deg);
}
.matrix:hover {
    transform: matrix(1.678, -0.256, 1.522, 2.333, -51.533, -1.989);
}
                        </pre>
                    </div>
                </li>
</ul>