<!doctype html>
<html lang="en">
<head>
    <link id="favicon" rel="icon" type="image/png" sizes="64x64" href="/img/messenger_blue.icon">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--syntaxhighlighter JS-->
    <script src="js/syntaxhighlighter/src/shCore.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushXml.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushCss.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushPhp.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushSql.js"></script>
    <script>SyntaxHighlighter.all();</script>
    <script>
        $(document).ready(function () {
            $('ul.tabs').tabs();
            $('.collapsible').collapsible();
        });
    </script>
    <!--Materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--syntaxhighlighter css-->
    <link rel="stylesheet" href="js/syntaxhighlighter/styles/shCore.css">
    <link rel="stylesheet" href="js/syntaxhighlighter/styles/shThemeDefault.css">

    <!--STYLE-->
    <style>
        body {
            background-image: url("img/bg.jpg");
            font-family: GillSans, Calibri, Trebuchet, sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #607d8b;
            margin-top: 40px;
        }

        b {
            color: #069;
        }

        div.card-panel {
            width: 100%;
            font-size: 16px;
        }

        div .col active {
            width: 100%;
        }

        .wrapper {
            width: 85%;
            margin: auto;
        }

        ul.tabs {
            background: none;
        }

        .collapsible-header:not(".active") {
            width: 250%;
        }

        .collapsible-header, .collapsible-body, #html, #css, #php, #jq, #js, #ajax, #curl, #twig, #mysql, #push {
            width: 100%;
        }
    </style>

    <title>Записки программиста</title>
</head>
<body>

<div class="wrapper">
    <div class="row">
        <div class="cols">
            <ul class="tabs">
                <li class="tab"><a href="#html" class="active">HTML</a></li>
                <li class="tab"><a href="#css">CSS</a></li>
                <li class="tab"><a href="#php">PHP</a></li>
                <li class="tab"><a href="#mysql">MySQL</a></li>
                <li class="tab"><a href="#js">JS</a></li>
                <li class="tab"><a href="#jq">jQuary</a></li>
                <li class="tab"><a href="#curl">cURL</a></li>
                <li class="tab"><a href="#twig">TWIG</a></li>
                <li class="tab"><a href="#push">Web PUSH</a></li>
            </ul>
        </div>

        <div id="html" class="col">

            <!--            Начало html-->

            <ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Выравниване контейнера по центру</div>
                    <div class="collapsible-body">
                        <pre class="brush: html">
                            <div style="display: block; margin: auto"></div>
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Теги для списков</div>
                    <div class="collapsible-body card-panel">
                        <b>&lt;ol&gt;</b> устанавливает нумерованный список, т.е. каждый элемент списка начинается
                        с числа или буквы и увеличивается по нарастающей.<br>
                        <b>&lt;ul&gt;</b> устанавливает маркированный список, каждый элемент которого начинается с
                        небольшого символа — маркера.<br>
                        <b>&lt;li&gt;</b> определяет отдельный элемент списка. Внешний тег &lt;ul&gt; или &lt;ol&gt;
                        устанавливает тип списка — маркированный или нумерованный.<br>
                        <b>&lt;dd&gt;, &lt;dt&gt;, &lt;dl&gt;</b> тройка элементов предназначена для создания
                        списка определений. Каждый такой список начинается с контейнера &lt;dl&gt;, куда входит тег &lt;dt&gt;
                        создающий термин и тег &lt;dd&gt; задающий определение этого термина. Закрывающий тег &lt;/dd&gt;
                        не
                        обязателен, поскольку следующий тег сообщает о завершении предыдущего элемента. Тем не менее,
                        хорошим
                        стилем
                        является закрывать все теги.<br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Теги для таблици</div>
                    <div class="collapsible-body card-panel">
                        <b>&lt;table&gt;</b> служит контейнером для элементов, определяющих содержимое таблицы. Любая
                        таблица
                        состоит из строк и ячеек, которые задаются с помощью тегов &lt;tr&gt;и &lt;td&gt;<br>
                        <b>&lt;td&gt;</b> предназначен для создания одной ячейки таблицы. Тег &lt;td&gt;должен
                        размещаться
                        внутри
                        контейнера &lt;tr&gt;, который в свою очередь располагается внутри тега &lt;table&gt;.<br>
                        <b>&lt;th&gt;</b> предназначен для создания одной ячейки таблицы, которая обозначается как
                        заголовочная.
                        Текст в такой ячейке отображается браузером обычно жирным шрифтом и выравнивается по центру.<br>
                        <b>&lt;tr&gt;</b> служит контейнером для создания строки таблицы.<br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Блок с обводкой</div>
                        <div class="collapsible-body">
                            <pre class="brush: xml">
                                &lt;fieldset&gt;&lt;legend&gt;Имя поля&lt;/legend&gt;бла бла бла&lt;/fieldset&gt;
                            </pre>
                        </div>
                </li>

                <li>
                    <div class="collapsible-header">Указатели для input-ов</div>
                    <div class="collapsible-body card-panel">
                        <span><b>placeholder</b> - текст заместитель в поле ввода</span><br>
                        <span><b>checked</b> - выбранный radio или checkbox по умолчанию</span><br>
                        <span><b>required</b> - поле обязательное для заполнения</span><br>
                        <span><b>autofocus</b> - автофокус на поле</span><br>
                        <span><b>autocomplete=”off”</b> - авто завершение(жезл) выкл</span><br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Input type list</div>
                    <div class="collapsible-body">
                        <pre class="brush: xml">
                            <input id="awardWon" name="awardWon" type="text" list="awards">
                            <datalist id="awards">
                                <select>
                                    <option value="Best Picture"></option>
                                    <option value="Best Director"></option>
                                    <option value="Best Adapted Screenplay"></option>
                                    <option value="Best Original Screenplay"></option>
                                </select>
                            </datalist>
                        </pre>
                        <div class="card-panel">
                            Атрибут <b>list</b> и связанный с ним элемент <b>datalist</b>
                            позволяют ряду вариантов выбора быть представленными пользователю сразу же, как только он
                            начнет вводить значение в поле. В следующем примере кода атрибут list используется вместе со связанным с
                            ним элементом <b>datalist</b>. Значение, указываемое для атрибута <b>list</b>,
                            является ссылкой на идентификатор элемента <b>datalist</b>. Таким способом
                            <b>datalist</b> привязывается к полю ввода. Хотя здесь варианты заключены в элемент
                            <b>select</b>, в его использовании нет особой необходимости, но он помогает при применении
                            поли-филлов для тех браузеров, у которых это свойство не реализовано.
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Frame</div>
                    <div class="collapsible-body card-panel">
                        <b>&lt;frame&gt;</b> определяет свойства отдельного фрейма, на которые делится окно
                        браузера.<br>
                        <b>&lt;frameset&gt;</b> заменяет собой элемент &lt;body&gt; на веб-странице и формирует
                        структуру
                        фреймов.<br>
                        <b>&lt;iframe&gt;</b> создает плавающий фрейм, который находится внутри обычного документа, он
                        позволяет
                        загружать в область заданных размеров любые другие независимые документы.
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Атрибуты ссылок</div>
                    <div class="collapsible-body card-panel">
                        <b>target</b> по умолчанию, при переходе по ссылке документ открывается в текущем окне или
                        фрейме. При необходимости, это условие может быть изменено атрибутом target тега &lt;a&gt;. Синтаксис  следующий.<br>
                        <b>_blank</b> — загружает страницу в новое окно браузера.<br>
                        <b>_self</b> — загружает страницу в текущее окно (это значение задается по умолчанию).<br>
                        <b>_parent</b> — загружает страницу во фрейм-родитель, если фреймов нет, то это значение
                        работает как _self.<br>
                        <b>_top</b> — отменяет все фреймы и загружает страницу в полном окне браузера, если фреймов нет,
                        то это значение работает как _self.<br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Типы вводимой информации</div>
                    <div class="collapsible-body card-panel">
                        <b>mail</b> – мейл<br>
                        <b>number min=”1” max=”10” step=”5”</b> – числовое значение<br>
                        <b>url</b> – адрес<br>
                        <b>tel</b> – номер телефона<br>
                        <b>search pattern=”lokki”</b> – поисковой запрос, с паттерном<br>
                        <b>color</b> – цвет<br>
                        <b>date</b> – дата<br>
                        <b>rage</b> – ползунок ввода<br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Вывод кода на страницу</div>
                    <div class="collapsible-body">
                        <pre class="brush: xml">
                            /*Поделючаем syntaxhighlighter и необходимые интерпритаторы*/
                            <script src="js/syntaxhighlighter/src/shCore.js"></script>
                            <script src="js/syntaxhighlighter/scripts/shBrushXml.js"></script>
                            <script src="js/syntaxhighlighter/scripts/shBrushCss.js"></script>
                            <script src="js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
                            <script src="js/syntaxhighlighter/scripts/shBrushPhp.js"></script>
                            <script>SyntaxHighlighter.all();</script>

                            /*Поделючаем syntaxhighlighter стили*/
                            <link rel="stylesheet" href="js/syntaxhighlighter/styles/shCore.css">
                            <link rel="stylesheet" href="js/syntaxhighlighter/styles/shThemeDefault.css">

                            /*Выводимы код заключаем в блоки*/
                            &lt;pre class=&quot;brush: xml/php/css/jsrcipt&quot;&gt;
                                code
                            &lt;/pre&gt;
                        </pre>
                    </div>
                </li>
            </ul>

            <!--            Конец html -->

        </div>
        <div id="css" class="col">

            <!--            Начало CSS-->

            <ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Отображение на всю ширину</div>
                    <div class="collapsible-body">
                            <pre class="brush: xml">
                                <meta name="viewport" content="width=device-width">
                            </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Директива @media</div>
                    <div class="collapsible-body">
                        <pre class="brush: css">
                            @media screen and (min-width: 50em) {
                                /* стили */
                            }
                        </pre>
                        <div class="card-panel">
                            Директива <b>@media</b> сообщает браузеру о начале медиа-запроса, компонент screen сообщает
                            браузеру, что правила должны применяться ко всем типам экранов, и компонент and <b>(min-width: 50em)</b> сообщает
                            браузеру, что правила должны действовать для всех окон просмотра, чья ширина превышает <b>50 em</b>.
                        </div>
                        <pre class="brush: css">
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
                        <pre class="brush: css">
                            @import url("имя файла") типы носителей;
                            @import "имя файла" типы носителей;

                            @import url("style/header.css"); /*Импортирование стилей*/

                            @import "/style/main.css" screen; /* Стиль для вывода результата на монитор*/
                            @import "/style/smart.css" print, handheld; /* Стиль для печати и смартфона*/
                        </pre>

                        <h5>2й тип подключения</h5>
                        <pre class="brush: xml">
                            <link media="print, handheld" rel="stylesheet" href="print.css"> - подкл. стиля для печати и смартфона
                            <link media="screen" rel="stylesheet" href="main.css"> - подкл. стиля для экрана монитора
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Синтаксис медиа запроса</div>
                    <div class="collapsible-body">
                            <pre class="brush: css">
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
                        <pre class="brush: css">
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
                        <pre class="brush: css">
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
                        <pre class="brush: css">
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
                        <pre class="brush: css">
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
                        <pre class="brush: css">
                            }
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
                        <pre class="brush: css">
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
                        <pre class="brush: xml">
                                <nav class="nav-Wrapper">
                                    <a href="/home" class="nav-Link">Home</a>
                                    <a href="/About" class="nav-Link">About</a>
                                    <a href="/Films" class="nav-Link">Films</a>
                                    <a href="/Forum" class="nav-Link">Forum</a>
                                    <a href="/Contact-Us" class="nav-Link nav-LinkLast">Contact Us</a>
                                </nav>
                            </pre>
                        <h5>CSS</h5>
                        <pre class="brush: css">
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
                        <pre class="brush: css">
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
                        <pre class="brush: css">
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
                        <pre class="brush: xml">
                            <meta name="viewport" content="initial-scale=2.0 width=device-width"/>
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Flexbox</div>
                    <div class="collapsible-body">
                        <pre class="brush: xml">
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
                            <pre class="brush: xml">
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
                        <pre class="brush: css">
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
                        <pre class="brush: xml">
                            <nav>
                                <a href="#">link1</a>
                                <a href="#">link2</a>
                                <a href="#">link3</a>
                                <a href="#">link4</a>
                                <a href="#">link5</a>
                            </nav>
                        </pre>
                        <p>CSS</p>
                        <pre class="brush: css">
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
                        <pre class="brush: css">
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
                        <pre class="brush: css">
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


                <!--            Конец CSS -->
        </div>
        <div id="php" class="col">

            <!--            Начало PHP-->

            <ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Работа с передачей переменных</div>
                    <div class="collapsible-body">
                        <pre class="brush: php">
                            ...name.php?name=Андрей

                            $name = $_GET['name']; /*Массив $_GET, содержит переменные из строки запроса*/
                            $name = $_POST['name']; /*Массив $_POST содержит переменные переданные методом post(скрытым)*/
                            $name = $_REQUEST['name']; /*Массив $_REQUEST содержит переменные из массива $_GET и $_POST*/
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Условия</div>
                    <div class="collapsible-body">
                        <pre class="brush: php">
                            if ($firstname == 'Andrey' and $lastname == 'Lutogin' or $firstname == 'u_GOD') {
                                //
                            } else {
                                //
                            }
                        </pre>
                        <p>Switch</p>
                        <pre class="brush: php">
                            switch ($i) {
                            case 0:
                                echo "i равно 0";
                                break;
                            case 1:
                                echo "i равно 1";
                                break;
                            case 2:
                                echo "i равно 2";
                                break;
                            default:
                                echo "i не равно 0, 1 или 2";
                            }
                        </pre>
                        <p>Тернарный оператор</p>
                        <pre class="brush: php">
                            $item = условие/переменная ? <выполняется если TRUE> : <выполняется если FALSE>
                            $answer = $first ? $second : $third
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Исключения</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        try {
                            $pdo = new PDO('mysql:host=localhost; dbname=ijdb', 'ijdbuser', 'Passw0rd'); //делаем что то опасное
                        }
                        catch (PDOException $e) { //тип исключения
                            $error = $e->GetMessage();
                            //обрабатываем исключение
                        }
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Циклы</div>
                    <div class="collapsible-body">
                        <p>while</p>
                        <pre class="brush: php">
                        while($count <= 10) { //выполняется пока в условии TRUE
                          команды;
                        }

                        //конструкция endwhile
                        while($count <= 10):
                            команды;
                        endwhile;

                        //цикл минимум одной итерации
                        do {
                          команды;
                        } while(условие)

                        //использование с PDO
                        while ($row = $result->fetch()) { //метод fetch в конце строки БД выдает false
                          $jokes[] = $row['joketext'];
                        }
                    </pre>
                        <p>for</p>
                        <pre class="brush: php">
                        for($count = 1; $count <= 10; ++$count) {
                          echo "$count ";
                        }
                    </pre>
                        <p>foreach</p>
                        <pre class="brush: php">
                        foreach($massive as $item => $key) { //$massive указывается без []
                          .....при изменении массива, меняеться только его копия!
                        }

                        foreach(&$massive as $item => $key) {
                          .....при изменении массива, меняеться только его копия!
                        }

                        //Пример перебора значений
                        foreach ($result as $row) {
                            $jokes[] = array(
                                'id' => $row ['id'],
                                'text' => $row['text'],
                                'name' => $row['name'],
                                'mail' => $row['mail']
                            );
                            if ($name == 'Andrey' and $mail == 'x@x.x'){
                                break;
                            }
                        }
                    </pre>
                        <b>break()</b> – команда немедленного выхода из цикла<br>
                        <b>continue</b> – команда завершат текущию этерацию цикла и переходит к следующей
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">include / require</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            Команды <b>include</b> и <b>require</b> почти идентичны. Они лишь по-разному реагируют на
                            ситуацию, когда указанный файл подключить невозможно: либо он не существует, либо у веб-сервера нет полномочий на его
                            чтение. В таком случае include выводит предупреждение, при этом скрипт продолжает свою работу, require
                            отображает сообщение об ошибке, и скрипт останавливается!<br>
                            <b>require_once/include_once</b> подключить один раз, если файл уже подключен, тогда игнорируется!
                        </div>
                        <pre class="brush: php">
                            if ($firstname == 'Andrey' and $lastname == 'Lutogin' or $firstname == 'u_GOD') {
                                //
                            } else {
                                //
                            }
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Массив $_SERVER</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        $_SERVER ['DOCUMENT_ROOT'] //корень каталога php.

                        //Подключение db.inc.php
                        include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

                        $ip = $_SERVER['REMOTE_ADDR']; // ip пользователя

                        $_SERVER['HTTP_USER_AGENT']; // содержит название браузера

                        //Получение запроса из строки
                        echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                        //Содержит текст строки запроса после ?
                        $_SERVER[‘QUARY_STRING’]
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Функции</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        function area($width, $height, $select = 0)
                        {
                            global $pdo; //импортирование глобальной переменной в обл. видимость фунции
                            return $width * $height;
                        }
                    </pre>
                        <b>return</b> остановка функции и возвращение результата в ее тело.<br>
                        При передачи переменной в функцию, и ее изменении, меняеться не оригинал а ее копия, что бы
                        функция могла редактировать оригинал переменной, в ее обьявлении необходим <b>&</b> : <b>function
                            test(&$var) -
                            &$var</b> – ссылка на переменную<br>
                        <br>
                        Передача неопределенного числа параметров в функцию:<br>

                        <pre class="brush: php">function solarWalk(...$planets)</pre>
                        <br>
                            Типизация передаваемых значений в функцию:<br>
                        <pre class="brush: php">function area(int $width, int $height, bool $select = 0) : int</pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Глобальная переменная, global</div>
                    <div class="collapsible-body">
                        <pre class="brush: php">global $pdo;</pre>
                        <div class="card-panel">
                            Выражение global, позволяет задать список глобальных переменных, к которым вы хотели бы получить
                            доступ внутри функции (если переменных несколько, они разделяются запятыми). Это называется
                            импортированием переменных. Еще один способ импортировать переменную — использовать массив <b>$GLOBALS</b><br>
                        </div>
                        <pre class="brush: php">$result = $GLOBALS[‘pdo’]->query(‘SELECT COUNT(*) FROM joke’);</pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Перенаправление</div>
                    <div class="collapsible-body">
                        <pre class="brush: php">
                            echo '&lt;meta http-equiv=&quot;Refresh&quot; content=0; url=&quot;/some/other/script.php&quot;&gt;';
                            exit();
                            //или
                            header("Location: http://other.ru");
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Регулярные вырожения</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <h5>Спецсимволы</h5>
                            <b>\</b> - символ экранирования.<br>
                            Пример: <b>'/qwe\/rty/'</b> - соответствует строке, в которой есть qwe/try. Символ / мы
                            заэкранировали, после чего он перестал выполнять в данном месте свое специальное значение (он являлся ограничителем шаблона).<br>
                            <b>^</b> - символ начала данных.<br>
                            <b>$</b> - символ конца данных.<br>
                            Пример: <b>'/^pattern$/'</b> - Соответствует строке, точно совпадающей с словом pattern. Т.е. с
                            буквы p строка начинается и после n заканчивается.<br>
                            <b>.</b> - любой символ, кроме перевода строки. Но есть модификатор, при использовании которого перевод строки тоже относится к "любым" символам.<br>
                            Пример: <b>'/pat.ern/'</b>> - Соответствует и строке, содержащей pattern, или patdern, или pat3ern...<br>
                            <b>[ ]</b> - внутри этих скобок перечисляются символы, любой один символ из которых может стоять
                            на данном месте. Это называется символьным классом. Спецсимволы, написанные в [] ведут себя немного по-другому.<br>
                            Пример: <b>'/pat[aoe]rn/'</b> - под соответствие попадут только строки, содержащие patarn, patorn или patern.<br>
                            <b>|</b> - Или. Пример ниже.<br>
                            <b>( )</b> - подмаска.<br>
                            <b>?</b> - одно или ноль вхождений предшествующего символа или подмаски.<br>
                            <b>*</b> - любое количество вхождений предшествующего символа или подмаски. В том числе и ноль.<br>
                            <b>+</b> - одно или более вхождений.<br>
                            Пример: <b>'/as+(es|du)?.*r/'</b> - Буква а, потом одна или больше букв s, после этого сочетание es
                            или du может быть один раз, а может м ни разу, потом любое количество любых символов и буква r.<br>
                            Здесь же скажу про еще одно значения символа <b>?</b>. Метасимвол звездочка по умолчанию жадный
                            (и другие тоже). Это значит, что в нашем примере вот этой части <b>'.*r'</b> будет соответствовать, например,
                            подстрока asdrfsrsfdr. Как видно, до последней буквы r в нее попало еще две. Вот эту жадность можно
                            выключить. Т.е. шаблон станет соответствовать только подстроке asdr. До первого r. Для этого надо в до того места где
                            необходимо отключить жадность поставит модификатор (?U). Вот еще одно применение символам <b>? и ()</b>.<br>
                            <b>{a,b}</b> - количество вхождений предшествующего символа или подмаски от а до б. Если б не
                            указан, считается, что верхней границы нет. Например, <b>*</b> - то же самое, что {0,}. ? - то же, что {0,1}. {5,7} - 5,6 или 7 повторений.<br>
                        </div>

                        <div class="card-panel">
                        <h5>Спецсимволы внутри символьного класса</h5>
                        <b>^</b> - отрицание.
                        Пример: <b>[^da]</b> - соответствует любому символу кроме d и a.<br>
                        Пример: <b>[^^]</b> - соответствует любому символу кроме <b>^</b>.
                        Пример: <b>[d^a]</b> - соответствует любому символу из перечисленных трёх. <b>[\^da]</b> - то же
                        самое.<br>
                        В последнем примере, как видно символ стоит не в начале перечисления и свою метафункцию теряет.
                        И экранировать его, тоже тут не надо.<br>
                        <b>-</b> - внутри символьного класса означает символьный интервал.<br>
                        Пример: <b>[0-9a-e]</b> - соответствует любому символу от 0 до 9 и от a до e. Если в символьном
                        классе надо перечислить сам символ дефиса, то следует либо заэранироватьего, либо разместить перед ].<br>
                        Осторожно в символьном классе надо использовать символ <b>\</b>. Если его поставить перед ], она
                        окажется заэкранирована. Также окажется заэкранированным любой символ, который может быть заэкранирован.
                        Иначе символ
                        <b>\</b>является обычным символом.<br>
                        Символ <b>$</b> тоже является обычным символом внутри символьного класса. И скобки тоже.
                        <p>Символ <b> \ </b>. Одна из его функций - снятие специального значения с спецсимволов. А другая, наоборот придание специальных функций обычным</p>

                        <b>\cx </b> - ctrl + x. На месте x может быть любой символ. <br>
                        <b>\e</b> - escape.<br>
                        <b>\f</b> - разрыв страницы.<br>
                        <b>\n, \r, \t</b> - это нам и так привычно. Перевод строки, возврат каретки и табуляция.<br>
                        <b>\d</b> - любой символ, означающий десятичную цифру.<br>
                        <b>\D</b> - любой символ, не означающий десятичную цифру.<br>
                        <b>\s</b> - любой пробельный символ.<br>
                        <b>\S</b> - не пробельный.<br>
                        <b>\w</b> - любая цифра, буква или знак подчеркивания.<br>
                        <b>\W</b> - любой символ, но не \w.<br>
                        <b>\b</b> - граница слова. Можно использовать вместо \w\W или \W\w или ^\w или \w$<br>
                        <b>\B</b> - не граница слова.<br>
                        Две последние конструкции не соответствуют никаким реальным символам.<br>
                        <b>\xHH</b> - символ с шестнадцатиричным кодом HH. x - это именно буква икс.<br>
                        <b>\DDD</b> - символ с восьмиричным кодом DDD. Или ссылка на подмаску.<br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Маст кнов</div>
                    <div class="collapsible-body">
                        <b>each()</b> -  возвращает текущую пару ключ/значение из массива array и смещает его указатель.
                        Эта пара возвращается в виде массива из четырёх элементов, со следующими ключами: 0, 1, key и value.
                        Элементы 0 и key содержат ключ элемента массива, а элементы 1 и value содержат его значение.<br>
                        <b>define ("CONSTANT", "Hello world.")</b> - обьявление константы<br>
                        <b>explode</b> - разбивает строку в массив с помощью разделителя<br>
                        <b>$a = &$b</b> – жесткая ссылка, $a всегда будет равна $b и наоборот, переменные становятся синонимами<br>
                        <b>system()</b> – функция запуска команд ОС
                        <pre class="brush: php">system(“rundll32.exe user32.dll LockWorkStation”)</pre>
                        <b>serialize($obj)</b> – запечатывает обьект в стоку <b>unserialize($obj)</b> – выгрузка обьекта из строки<br>
                        <b>fopen</b>– команда открытия файла, адрес пишется только чекрез обратный слешь " / " fclose($file) – закрытие файла<br>
                        <pre class="brush: php">$file = fopen(“/folder/file.txt”, “rt”-чтение, “rw”-запись) or die(‘Текст ошибки’)</pre>
                        <b>strtotime($date)</b> – преобразует текст в стампдату<br>
                        <b>serialize</b> - генерирует пригодное для хранения представление переменной. Для превращения сериализованной строки обратно в PHP-значение, используйте функцию <b>unserialize()</b>.<br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">ООП</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <b>public / private / protected</b> - модификаторы доступа для методов и свойств.<br>
                            <b>public</b> позволяет обращаться к свойствам и методам отовсюду.<br>
                            <b>private</b> позволяет обращаться к свойствам и методам только внутри текущего класса.<br>
                            <b>protected</b> позволяет обращаться к свойствам и методам только текущего класса и класса, который наследует свойства и методы текущего класса.<br>
                            <br>
                            <b>$this</b> – для обращения к внутренниму содержимому обьекта.<br>
                            <b>self</b> – для обращения к внутренниму содержанию класса.<br>
                            <b>__toString()</b> – спец функция перобразования обьекта класса в строку.<br>
                            <b>clone</b> – команда для клонирования обьекта.<br>
                            <b>::</b> - оператор разрешения области видимости, который предворяется или именем класса или ключемвым словом
                            <b>self (echo cls::NAME)</b><br>
                        </div>
                        <pre class="brush: php">
                            class shopProduct
                            {
                                public $title;//доступная переменная
                                public $sallerName;
                                private $price;//приватная переменная
                                public function __construct($title, $sellerName, $price){ // Обьявления конструктора функции
                                    $this->title = $title;
                                    $this->sallerName = $sellerName;
                                    $this->price = $price;
                                }
                                function getView(){ // функция класса для вывода инфо о товаре
                                    return "Товар: {$this->title} <br> Продавец: {$this->sallerName} Цена: {$this->price}";

                                }
                                public function getPrice(){ // публичная функция для возврата цены, т.к.          цена приватна
                                    return $this->price;
                                }
                                function __toString(){
                                    return "({$this->re}, {$this->im})";  //
                                }
                            }

                            class saller
                            {
                                function sale(shopProduct $product, $sale){//функция для посчета суммы со скидкой, НАСЛЕДНИК класса shopProduct
                                    return $product->getPrice() * (1-$sale);
                                }
                            }

                            $product = new shopProduct('питолет ТТ', 'Вася Пупкин', 250);
                            $sale = new saller();
                            echo $product->getView();
                            echo 'Сумма без скидки: ' . $sale->sale($product, 0);
                            echo 'Сумма со скидкой: ' . $sale->sale($product, 0.12);
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Наследие</div>
                    <div class="collapsible-body">
                        <pre class="brush: php">
                            class saller
                            {
                                function sale(shopProduct $product, $sale)
                            }
                        </pre>
                        Функция <b>sale</b> наследует методы и параментры <b>shopProduct</b>, те которые обьявлены как
                        <b>public</b>.<br>
                        Для вызова методов из класса родитея, необходимо указать <b>parent::(имя метода)</b>
                        <pre class="brush: php">
                            class shopProduct
                            {
                            public $title;//доступная переменная
                            public $sallerName;
                            private $price;//приватная переменная
                            function __construct($title, $sellerName, $price){ // Обьявления конструктора функции
                                $this->title = $title;
                                $this->sallerName = $sellerName;
                                $this->price = $price;
                            }

                            //Наследования функции конструктора
                            class digitalProduct
                            {
                                public $type;
                                public $size;

                                public function __construct($title, $sellerName, $price, $type, $size){
                                    parent::__construct($title, $price);//сначала вызываем родительский метод, потом локальный
                                    $this->type = $type;
                                    $this->size = $size;
                            }
                        </pre>
                    </div>
                </li>

            </ul>


            <!--            Конец PHP-->

        </div>
        <div id="mysql" class="col">

            <!--MySQL начало-->

            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">Подключение PDO</div>
                    <div class="collapsible-body">
                        <pre class="brush: php">
                            try {
                                $new_db = new PDO('mysql:host=localhost; dbname=nameDateBase', 'userName', 'password');
                                $new_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //ATTR_ERRMODE - вывод ошибок ERRMODE_EXCEPTION - режим выброса исключений
                                $new_db('SET NAMES "utf8"'); //ВЫбераем кодировку
                            }
                            catch (PDOException $e) {
                                //обрабатываем исключение при ошибке подключения к БД
                            }
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Работа с PDO</div>
                    <div class="collapsible-body">
                            <pre class="brush: php">
                                //Для вывода информации с базы данных используется метод QUERY, Он также как и EXEC принимает запросы к базе данных но возвращает объект PDOStatement, который представляет собой результирующий набор.
                                $sql = "SELECT joketext FROM joke";
                                $result = $pdo->query($sql);

                                //Любые команды, exec возвращает кол. изменненых строк
                                $pdo->exec(запрос);

                                //отключение от серверая баз данных
                                $pdo = null;
                            </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Передача незаданного запроса</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        $sql = "INSERT INTO joke SET joketext = :joketext, authorid = :authorid, dateadd = CURRENT_DATE";
                                $s = $db->prepare($sql);
                                $s->bindValue(':joketext', $_POST['joketext']);
                                $s->bindValue(':authorid', $_POST['authorid']);
                                $s->execute();
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">MySQLi</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        //При подключении mysqli_connect возвращает Boolean значение
                        $connect = mysqli_connect("127.0.0.1", "имя пользователя", "пароль", "название базы данных");

                        if($connect == 'false') {
                            echo "Ошибка подключения к БД";
                            echo mysqli_connect_error(); //Вернет описание ошибки
                        }

                        //Выводит по одной строке из массива
                        $result = mysqli_query($connect, "SELECT * FROM joke");
                        $row = mysqli_fetch_assoc($result);

                        //Проход по всем строкам
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo ($row['joketext']);
                        }

                        //Закрывает соедениение с БД
                        mysqli_close($connect);
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Создание таблици</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        CREATE TABLE joke (
                        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        joketext TEXT,
                        jokedate DATE NOT NULL
                        ) DEFAULT CHARACTER SET Utf8 ENGINE=InnoDB
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Время</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        INSERT INTO joke SET DATE  = NOW()  - выставит текущее время.

                        SELECT PERIOD_DIF(p1, p2)  - возвращает количество месяцев между периодами р1 и р2, P1 и P2 должны быть в формате YYMM или YYYYMM
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Сортировка вывода ORDER BY</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        SELECT text, views ORDER BY views  - сортировка по столбцу views

                        SELECT text, views ORDER BY views DESC  - инверсия сортировки

                        SELECT text, views ORDER BY views DESC LIMIT 10  - вывод только 10 записей по сортировке

                        SELECT text, views ORDER BY views DESC LIMIT 10, 20  - постраничный вывод, пропустить первые 10 и вывести следующие до 20
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Запись в БД</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        INSERT INTO joke SET
                        joketext = "Зачем цыпленок перешел дорогу? Чтобы попасть на другую сторону!",
                        jokedate = "2012-04-01"
                    </pre>
                        <p>Альтернативный вариант</p>
                        <pre class="brush: sql">
                        INSERT INTO joke
                        (joketext, jokedate)
                        VALUES
                        ("Королеве - подвески, Констанции - подвязки", "2012-04-01")
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Вывод</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        SELECT LEFT(joketxt, 20) FROM joke  - выводит текст шуток, выравнивая слева до 20 сим-в
                        SELECT DISTINCT authorname, authoremail FROM joke
                    </pre>
                        <b>DISTINCT</b> предотвращает вывод дублирующихся строк. Например, если Джоан Смит добавила на
                        сайт 20
                        записей, то благодаря этому параметру ее имя появится в общем списке всего один раз, а не 20.
                        <pre class="brush: sql">
                        SELECT joke.id, LEFT(joketext, 20), name, email
                        FROM joke INNER JOIN author
                        ON authorid = author.id
                    </pre>
                        Оператор <b>INNER JOIN</b> объединение команды <b>SELECT</b>. Он позволяет обращаться с данными
                        из
                        разных
                        таблиц
                        так,
                        будто они хранятся в одной таблице.
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Счетчик ячеек</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        SELECT COUNT(id) FROM joke  - выводит кол-во id.
                        SELECT COUNT(id) AS ’size’ FROM joke  - выводит кол-во id но в ячейке size.
                    </pre>

                        <div class="collapsible-header">Среденее арифметическое</div>
                        <pre class="brush: sql">
                        SELECT AVG(money) FROM org  - выводит среднее значение.

                        или

                        SELECT * FROM Table WHERE date BETWEEN 200703 AND 200708
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Обновление содержания ячейки</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        UPDATE joke SET jokedate = "2013-04-01" WHERE id = "1"
                        UPDATE joke SET jokedate = "2010-04-01" WHERE joketext LIKE "%цыпленок"

                        ALTER TABLE joke DROP COLUMN authorname
                    </pre>
                        <b>ALTER</b> редактор содержания таблици
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Удаление</div>
                    <div class="collapsible-body">
                    <pre class="brush: sql">
                        DELETE FROM joke WHERE joketext LIKE "%цыпленок%"
                    </pre>
                    </div>
                </li>

            </ul>

            <!--MySQL конец-->

        </div>
        <div id="js" class="col">

            <!--            Начало JS-->


            <ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Работа c переменными, преобразование</div>
                    <div class="collapsible-body">
                        <pre class="brush: jscript">
                            var s = "hello, world" //Начнем.
                            s.charAt(0) //=>"h": первый символ.
                            s.charAt(s.length-1) //=>"d": последний символ.
                            s.substring(1,4) //=>"ell": 2й, 3й и 4й символы.
                            s.slice(1,4) //=>"ell": тоже самое
                            s.slice(-3) //=>"rld": последние 3 символа
                            s.indexOf("l") //=>2: позиция первого символа l.
                            s.lastIndexOf("l") //=>10: позиция последнего символа l.
                            s.indexOf("l",­3) //=>3: позицияпервого символа "l",следующего за 3 символом в строке
                            s.split(",") //=>["hello", "world"] разбивает на подстроки
                            s.replace("h","H") //=>"Hello, world": замещает все вхождения подстроки
                            s.toUpperCase() //=>"HELLO, WORLD"
                            s.typeof //=> "string" - возвращает тип переменной
                        </pre>
                        <div class="card-panel">
                            <h5>Преобразование переменных</h5>
                            <b>toString</b> - преобразовует обьект в строку<br>
                            <b>Number</b> - преобразовует обьект в число, либо var a = +"123"<br>
                            <b>valueOf</b> - преобразовует остальные обьекты в строку<br>
                            <b>serializeArray</b> - преобразовывает массив в JSON обьект<br>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Функция, и ряд операторов</div>
                    <div class="collapsible-body">
                    <pre class="brush: jscript">
                        //Обьявление простой функции
                        var square = function(x) { return x * x; }
                    </pre>
                        Оператор <b>in</b>
                    <pre class="brush: jscript">
                        "x" in point //=>true: объект имеет свойство с именем "x"
                        "z" in point //=>false: объект не имеет свойства с именем "z"
                    </pre>
                        Оператор <b>instanceof</b> - проверка класса
                    <pre class="brush: jscript">
                        var current_Class = d instanceof Date; //>=true, обьект d был создан функцей Date
                    </pre>
                        Операторы <b>&& || ! +=</b>
                    <pre class="brush: jscript">
                        if (a == b) stop();
                        //тоже что и
                        (a == b) && stop();

                        var max = max_width || preferences.max_width || 500;
                        //Если переменная max_width определена, ее значение попадет в max, если нет проверяется переменная preferences.max_width, если и она не определена то max = 500

                        //! - логическая инверсия
                        !(p && q) === !p || !q
                        //и
                        !(p || q) === !p && !q
                        //Проверки дают положительный результат при людых значениях

                        i = j = k = 0
                        //Все три переменные = 0

                        total += sales_tax
                        //эквиваленто
                        total = total + sales_tax

                        delete item.x
                        //Удаляет св-во "x" из обьекта item
                    </pre>
                        Оператор <b>++</b> и аналоги
                    <pre class="brush: jscript">
                        var i = 1, j = ++i;//i и j содержат значение 2
                        var i = 1, j = i++;//i содержит значение 2, j содержит значение 1
                    </pre>
                        <div class="card-panel">
                            <b>void</b> - указывается перед операндом. Он вычисляет значение операнда, за тем отбрасывает его и возвращает undefined.<br>
                            Инициализаторы объектов
                        </div>
                    <pre class="brush: jscript">
                        var p = { x:2.3, y: 1.2 }; //Объект с 2 свойствами
                        var q = {}; //Пустой объект без свойств
                        q.x = 2.3; q.y = 1.2; //Теперь q имеет теже свойства, что и p
                    </pre>
                        <div class="card-panel">
                            <b>throw</b> - позволяет генерировать исключения, определяемые пользователем. При этом выполнение
                            текущей функции будет остановлено (инструкции после throw не будут выполнены), и управление будет
                            передано в первый блок catch в стеке вызовов. Если catch блоков среди вызванных функций нет, выполнение программы будет остановлено.
                        </div>
                        <pre class="brush: jscript">
                            throw "Error2"; // генерирует исключение, значением которого является строка
                            throw 42;       // генерирует исключение, значением которого является число 42
                            throw true;     // генерирует исключение, значением которого является логическое значение true
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">eval()</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <p>При передачи числа вернет число, при передачи строки будет пробовать интерпритировать как код на JS
                            в случае неудачи вернет SyntaxError, в случае успеза вернет значение из return переданного кода.
                        </div>
                    <pre class="brush: jscript">
                        eval("function f() { return x+1; }");
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Области видимости, with</div>
                    <div class="collapsible-body">
                    <div class="card-panel">
                        <h5>Глобальная переменная</h5>
                        В браузере этот объект явно доступен под именем <b>window</b>. Объект window одновременно является
                        глобальным объектом и содержит ряд свойств и методов для работы с окном браузера, но нас здесь
                        интересует только его роль как глобального объекта.
                        Для обозначения глобального объекта используется "<b>window</b>".
                    </div>
                    <pre class="brush: jscript">
                        var a = 5; // объявление var создаёт свойство window.a
                        alert(window.a); // 5

                        window.a = 5; // cоздать переменную можно и явным присваиванием в window
                        alert(a); // 5
                    </pre>
                    <pre class="brush: jscript">
                        with(объект)
                            инструкция
                    </pre>
                        <div class="card-panel">
                            Эта инструкция добавляет объектв начало цепочки областей видимости, выполняет инструкцию,
                            а затем восстанавливает первоначальное состояние цепочки. Не рекомендована к использованию
                        </div>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Обьекты</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <h5>Прототипы</h5>
                            <b>Object.prototype</b> - содержит прототип(родитель) обьекта.<br>
                            <b>Object.create()</b> - создаёт новый объект с указанными объектом прототипа и свойствами.<br>
                        </div>
                        <pre class="brush: jscript">
                            var o1 = Object.create({x:1, y:2}); //o1 наследует свойства x и y.
                            item1.prototype = protoType; //установка прототипа item1, в item1 будет унаследованы свойства и методы прототипа
                        </pre>
                        <h5>Удаление свойств</h5>
                        <pre class="brush: jscript">
                            delete book.author; //Теперь объект book  не имеет свойства author.
                            delete book["main­title"]; //Теперь он не имеет свойства "main­title".
                        </pre>
                        <h5>Проверка свойств</h5>
                        <pre class="brush: jscript">
                            var o = { x:1 };
                            o.hasOwnProperty("x"); //true: o имеет собственное свойство x
                            o.hasOwnProperty("y"); //false:не имеет свойства y
                            o.hasOwnProperty("toString"); //false:toString наследуемое свойство

                            "x" in o;        //true: o имеет собственное свойство "x"
                            "y" in o;        //false: o не имеет свойства "y"
                            "toString" in o; //true: o наследует свойство toString
                        </pre>
                        <h5>Перечисление св-в</h5>
                        <pre class="brush: jscript">
                            var o = {x:1, y:2, z:3};
                            for(p in o)                        //Цикл по свойствам
                                console.log(p);                //Выведет x, y и z, но не toString
                        </pre>
                        <h5>Чтения/getter и записи/setter свойств</h5>
                        <pre class="brush: jscript">
                            var o = {
                                //Обычное свойство с данными
                                data_prop : value,
                                //Свойство  с методами доступа определяется как пара функций
                                get accessor_prop(){/*тело функции*/},
                                set accessor_prop(value){/*тело функции*/}
                            };
                        </pre>
                        <div class="card-panel">
                            <h5>Чтение и изменение аттрибутов свойств</h5>
                            <b>Object.defineProperty()</b> - определяет новое или изменяет существующее свойство непосредственно на объекте, возвращая этот объект.<br>
                            Object.defineProperty(obj, prop, descriptor)<br>
                            <b>obj</b> - Объект, на котором определяется свойство.
                            <b>prop</b> - Имя определяемого или изменяемого свойства.
                            <b>descriptor</b> - Дескриптор определяемого или изменяемого свойства.
                        </div>
                        <pre class="brush: jscript">
                            Object.defineProperty(obj, 'key', {
                                enumerable: false, //enumerable - способеность к перечислению, например в цикле for in
                                configurable: false, //configurable - способность редактирования дескриптора свойства.
                                writable: false, //writable - способность редактирования
                                value: 'static'
                            });
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Массивы</div>
                    <div class="collapsible-body">
                        <pre class="brush: jscript">
                            arr = [];              // Создать пустой массив
                            arr.push("zero")       // Добавить значение в конец. a = ["zero"]
                            arr.push("one", "two") // Добавить еще два значения. a = ["zero", "one", "two"]
                            arr.unshift("three")   // Добавить значение в начало массива.
                            delete arr[1];         // теперь в массиве a отсутствует элемент с индексом 1
                            1 in arr               // => false: индекс 1 в массиве не определен
                            var $temp = arr.pop()  // уменьшает длину массива на 1 и возвращает значение удаленного элемента
                            arr.shift()            // Удаляет элемент в начале массива и возвращает его значение. В отличии от оператора delete, свдвигает все элементы вниз на позицию ниже их текущих индексов

                        </pre>
                        <h5>Обход элементов массива</h5>
                        <pre class="brush: jscript">
                            var keys = Object.keys(obj);           // Получить массив имен свойств объекта obj
                            var values = []                        // Массив для сохранения значений свойств
                            for(var i = 0; i < keys.length; i++) { // Для каждого элемента в массиве
                                var key = keys[i];                 // Получить имя свойства по индексу
                                values[i] = obj[key];              // Сохранить значение в массиве values
                            }

                            arr.forEach(function(){ ... })         // Проходит по каждому элементы массива
                        </pre>
                        <div class="card-panel">
                            Методы <b>indexOf()</b> и <b>lastIndexOf()</b> отыскивают в массиве элемент с указанным значением и возвращают индекс
                            первого найденного элемента или –1, если элемент с таким значением отсутствует. Метод <b>indexOf()</b>
                            выполняет поиск от начала массива к концу, а метод <b>lastIndexOf()</b> – от конца к началу.
                        </div>
                        <pre class="brush: jscript">
                            a = [0, 1, 2, 1, 0];
                            a.indexOf(1)       // => 1: a[1] = 1
                            a.lastIndexOf(1)   // => 3: a[3] = 1
                            a.indexOf(3)       // => -1: нет элемента со значением 3
                        </pre>
                        <h5>Методы Array</h5>
                        <b>Array.join()</b> преобразует все элементы массива в строки, противоположность<br>
                        <b>String.split(",")</b> преобразует строку в массив по разделителю<br>
                        <b>Array.slice()</b> возвращает фрагмент, или подмассив, указанного массива<br>
                        <pre class="brush: jscript">
                            var a = [1, 2, 3];
                            a.join();              // => "1,2,3"
                            a.join(" ");           // => "1 2 3"
                            a.join("");            // => "123"

                            var a = [1,2,3,4,5];
                            a.slice(0,3);   // Вернет [1,2,3]
                            a.slice(3);     // Вернет [4,5]
                        </pre>
                    </div>

                <li>
                    <div class="collapsible-header">Цепочка вызвов</div>
                    <div class="collapsible-body">
                        <p>Есть код</p>
                        <pre class="brush: jscript">
                            Есть код
                            var ladder = {
                                step: 0,
                                up: function() { // вверх по лестнице
                                    this.step++;
                                },
                                down: function() { // вниз по лестнице
                                    this.step--;
                                },
                                showStep: function() { // вывести текущую ступеньку
                                    alert( this.step );
                                }
                            };
                        </pre>
                        <p>Сейчас, если нужно последовательно вызвать несколько методов объекта, это можно сделать так:
                        <pre class="brush: jscript">
                            ladder.up();
                            ladder.up();
                            ladder.down();
                            ladder.showStep(); // 1
                        </pre>
                        <p>Чтобы вызовы можно было делать цепочкой, вот так</p>
                        <pre class="brush: jscript">
                            ladder.up().up().down().up().down().showStep(); // 1
                        </pre>
                        <p>Необходимо модифицировать код методов так, что бы они возвращали обьект</p>
                        <pre class="brush: jscript">
                            var ladder = {
                                step: 0,
                                up: function() {
                                    this.step++;
                                    return this;
                                },
                                down: function() {
                                    this.step--;
                                    return this;
                                },
                                showStep: function() {
                                    alert( this.step );
                                    return this;
                                }
                            }
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Преобразование переменных и обьектов</div>
                    <div class="collapsible-body">
                    <pre class="brush: jscript">

                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Преобразование переменных и обьектов</div>
                    <div class="collapsible-body">
                    <pre class="brush: jscript">

                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Преобразование переменных и обьектов</div>
                    <div class="collapsible-body">
                    <pre class="brush: jscript">

                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Преобразование переменных и обьектов</div>
                    <div class="collapsible-body">
                    <pre class="brush: jscript">

                    </pre>
                    </div>
                </li>



            </ul>

                <!--            Конец JS-->

        </div>
        <div id="jq" class="col">

            <!--            Начало jQuary-->
            <ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Базовые функции jQuary</div>
                    <div class="collapsible-body">
                    <h5>Выполнение скрипта после загрузки документа</h5>
                        <pre class="brush: jscript">
                        $ (document).ready(function () {
                            //здесь находится ваш код
                        });

                        //или сокращенная версия

                        $(function() {
                          //здесь находится ваш код
                        });

                        //Как показала практика более корректный способ

                        window.onload = function() {
                           // Ваш скрипт
                        };
                    </pre>
                        Выбор идентификатора (по ID) banner и изменение html кода внутри него
                        <pre class="brush: jscript">$(‘#banner’).html(‘<h1>Java</h1>’);</pre>


                        <pre class="brush: jscript">
                            //Выполнение нескольких команд к одному элементу, записывается через точку
                            $(‘#popUp’) . weight(300px) . height(250px);
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Фильтры селекторов jQuary</div>
                    <div class="collapsible-body card-panel">
                        <b>$(‘:text’)</b> – выбор всех текстовых полей<br>
                        <b>:even</b> – выбор каждого четного по счету элемента <b>$(‘ul:even’)</b><br>
                        <b>:odd</b> – выбирает каждый не четный элемент<br>
                        <b>:first и :last</b> – выбирают первый и последний элемент группы<br>
                        <b>:not()</b> находит селекторы не соответствующие данному типу селектора
                        <b>$(‘a:not(.navButton)’)</b><br>
                        <b>:has</b> – фильтр выбирает элементы содержащие другой селектор. <b>$(‘li:has(a)’)</b> – находит все
                        LI где есть A<br>
                        <b>:contains(‘simple’)</b> – находит элементы содержащие конкретный текст<br>
                        <b>:hidden</b> – находит скрытые элементы, в том числе к которым относятся элементы с CSS свойством
                        display: none;<br>
                        <b>:visible</b> – находит видимые элементы<br>
                        <b>.next()</b> находит элемент, который следует непосредственно за текущим элементом, в аргументе можно
                        указать класс или ID, для более точного выбора<br>
                        <b>.is(‘состояние’)</b> – выборка для состояния элемента, используется в условиях
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Редактирование содержимого страницы</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <b>.html()</b> функция способная считывать html код внутри элемента, а также замещать его<br>
                            <b>.text()</b> – аналог .html но меняет только текст в выборке<br>
                            <b>.append()</b> – добавляет новый дочерний фрагмент в конец кода, до закрытия тега<br>
                            <b>.prepend()</b> – добавляет код в начало выборки, сразу после открытия тега<br>
                            <b>.before()/.after()</b> – добавляет код перед/после тега выборки<br>
                            <b>.remove()</b> – удаляет выборку<br>
                            <b>.replaceWith()</b> – замена выборки<br>
                            <b>.addClass()</b> – добавляет новый класс к выбранному элементу, для изменения отображения через CSS<br>
                            <b>.removeClass()</b> – удаляет класс у выбранного элемента<br>
                            <b>.toggleClass(‘className’)</b> – добавляет или удаляет класс элемента, если класс присутствует –
                            удаляет, если отсутствует - добавляет<br>
                            <b>.css()</b> – изменение CSS свойств элемента выборки.
                        </div>
                        <h5>Примеры</h5>
                        <pre class="brush: jscript">$(‘#error’).html(‘<p>Новый код элемента</p>’)</pre>
                        <pre class="brush: jscript">$(#errors h2).text(“Ни одной ошибки не найдено”)</pre>
                        <pre class="brush: jscript">$(‘body’).css(‘font-size’, ‘14pt’)</pre>
                        для изменения нескольких св-ств, их нужно разделять <b>;</b>
                        <pre class="brush: jscript">.css(‘fotn-size’, ‘14pt’; ‘padding’, ‘120px’)</pre>
                        или использовать схему:
                        <pre class="brush: css">
                        .css({
                            ‘font-size’ : ‘14pt’,
                            ‘padding’ : ‘120px’,
                        });
                        </pre>
                        <div class="card-panel">
                            <h5>each</h5>
                            <b>.each()</b> - функция работающая с выборкой, поочередно применяет команды к элементам в аргументах,
                            преимущество состоит в том что, для каждого исполнения значения могут быть не линейными, удобнее
                            всего использовать анонимную функцию:
                        </div>
                        <pre class="brush: jscript">$(‘.menu’).each(function() { …команды });</pre>
                        <div class="card-panel">
                            Для обращения к элементу внутри функции, используется термин <b>$(this)</b>, например для получения
                            внешних ссылок с статьи:
                        </div>
                        <pre class="brush: jscript">
                            $('a[href^="http:\\"]').each(function()
                            {
                                //Cоздает переменую и присваевает значение attr(атрибута) текущей 'a'
                                var extLink = $(this).attr('href');
                                $('#listLink').append('<p>' + extLink + '</p>');
                            });
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Работа с атрибутами html через jQuary</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <b>.attr()</b> – читает/записывает атрибут указанного HTML элемента<br>
                            <b>.removeAttr()</b> – удаляет указанный атрибут выбранного элемента
                            <b>.remove()</b> - удаляет выбранные элементы из DOM
                        </div>
                        <pre class="brush: jscript">
                            $("img").attr("width","500");

                            $(".input).removeAttr("title");

                            $("p").remove(":contains('Hello')");
                        </pre>
                    </div>
                </li>


                <li>
                    <div class="collapsible-header">События</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                        <!--                      1-->
                            <h5>События мыши: </h5>
                            <b>click</b> – событие запускается при клике<br>
                            <b>dblclick</b> – событие запускается при двойном клике<br>
                            <b>mousedown</b> – событие нажатия кнопки мыши<br>
                            <b>mouseup</b> – события отпускания кнопки мыши<br>
                            <b>mouseover</b> – событие которое запускается при наведении указателя мышки<br>
                            <b>mousemove</b> – событие запускается при передвижении курсора<br>
                            <b>hover</b> – событие наведения курсора, работает с двумя функциями(при наведении и при увода мыши в
                            сторону), сочетает в себе методы <b>mouseEnter и mouseLeave</b>. Общий вид:
                        </div>
                        <pre class="brush: jscript">
                            $('#menu').hover(function () {
                                $('#submenu').show();
                            }), function () {
                                $('#submenu').hide();
                            });
                        </pre>
                        <!--                        2-->
                        <div class="card-panel">
                            <h5>События документа:</h5>
                            <b>load</b> – событие срабатывает после полной загрузки документа(html, css, img)<br>
                            <b>resize</b> – запускается при изменении размеров окна браузера<br>
                            <b>scroll</b> – запускается при использовании прокрутки<br>
                            <b>unload</b> – запускается при нажатии на ссылку переходы на другую страницу<br>
                        </div>
                            <!--                        3-->
                        <div class="card-panel">
                            <h5>События форм:</h5>
                            <b>submit</b> – запускается при отправке данных формы<br>
                            <b>reset</b> – запускается при сбросе данных формы<br>
                            <b>change</b> – запускается при изменении значения формы, переключателей<br>
                            <b>focus</b> – запускается при переходе, фокусировке на элементе<br>
                            <b>blur</b> – запускается при выходе элемента с фокуса<br>
                        </div>
                            <!--                        4-->
                        <div class="card-panel">
                            <h5>События клавиатуры:</h5>
                            <b>keypress</b> – запускается в момент срабатывания клавиши<br>
                            <b>keydown</b> – запускается в момент нажатия клавиши<br>
                            <b>keyup</b> – запускается при отпускании клавиши<br>
                        </div>
                        <!--                        5-->
                        <h5>Пример использования событий:</h5>
                        <pre class="brush: jscript">
                            $(document).ready(function(){
                                $('html').dblclick(function(){
                                    $('html').css('background-color', 'blue');
                                });
                                $('a').mouseover(function () {
                                    var $message = 'Вы навели указатель на ссыль!';
                                    $('.main').append($message);
                                });
                                $('#button').click(function () {
                                    $(this).val('Прекрати это');
                                });
                                $('#textfield').focus(function () {
                                    $(this).css('background-color', 'red');
                                })
                            });
                        </pre>
                        <div class="card-panel">
                            <b>$(this)</b> – обращения к внутреннему элементу, который вызывает функцию
                        </div>
                        <!--                        6-->
                        <div class="card-panel">
                            <h5>Объект события</h5>
                            В момент запуска события браузер записывает информацию о нем и сохраняет его в так называемом объекте
                            события. Объект события содержит данные, собранные в момент, когда произошло событие, такие, как
                            координаты указателя мыши по горизонтали и вертикали, элемент, который инициировал событие, была ли
                            нажата  при запуске события клавиша Shift. В библиотеке jQuery объект события доступен для функции, созданной
                            для  обработки данного события. Объект передается функции как аргумент, и, чтобы получить к нему доступ, вы
                            всего лишь добавляете к функции имя параметра. Например, вы хотите найти координаты указателя мыши в
                            момент, когда происходит щелчок в каком-либо месте страницы.
                        </div>
                        <pre class="brush: jscript">
                            $ (document).click(function (evt) {
                                 var xPos = evt.pageX;
                                 var yPos = evt.pageY;
                                 alert("X:" + xPos + "Y:" + yPos);
                            }); // окончание события click
                        </pre>
                        <div class="card-panel">
                            Объект события сохраняется в переменной <b>EVT</b>, это имя вводиться самостоятельно, и может быть любым
                            <p><b>Свойства события:</b><br>
                            <b>pageX</b> - расстояние (в пикселах) от указателя мыши до левого края окна браузера<br>
                            <b>pageY</b> - расстояние (в пикселах) от указателя мыши до верхнего края окна браузера<br>
                            <b>screenX</b> - расстояние (в пикселах) от указателя мыши до левого края монитора<br>
                            <b>screenY</b> - расстояние (в пикселах) от стрелки мыши до верхнего края монитора<br>
                            <b>shiftKey</b> - является истинным, если клавиша Shift была нажата, когда происходило событие<br>
                            <b>target</b> - объект, бывший целью события; например, для события <b>click()</b> - это элемент, по
                            которому  щелкнули кнопкой мыши<br>
                            <b>date</b> - объект jQuery, использованный с функцией <b>bind()</b> для передачи данных функции,
                            управляющей событием<br>
                            <b>which</b> - используется с событием нажатия клавиши для определения числового кода нажатой клавиши,
                            при  получении значения нажатой клавиши вернет ее номер, для его расшифровки используется функция
                        </div>
                        <pre class="brush: jscript">String.fromCharCode(evt.which)</pre>
                        <!--                        7-->
                        <h5>Отмена обычного поведения событий</h5>
                        <pre class="brush: jscript">
                            $('#menu').click(function(evt) {
                                // "Умный" JavaScript-код вставляется сюда
                            evt.preventDefault(); // не переходи по ссылке
                            }) ;
                        </pre>
                        <div class="card-panel">
                            <b>evt.preventDefault()</b> – функция выполняющая отмену обычного поведения событий на странице,
                            например переход по ссылке. Можно использовать аналогичную запись:
                        </div>
                        <pre class="brush: jscript">
                            $('#menu').click(function(evt){
                                // "Умный" JavaScript-код вставляется сюда
                            return false; // не переходи по ссылке
                            }) ;
                        </pre>
                        <!--                        8-->
                        <h5>Остановка события функцией jQuary</h5>
                        <pre class="brush: jscript">
                            $('#theLink').click(function(evt) {
                                // некие действия
                                evt.stopPropagation(); //останавливает событие
                            });
                        </pre>
                        <!--                        9-->
                        <h5>Удаление события</h5>
                        <pre class="brush: jscript">
                            $ (‘.tabButton’).off(‘click’);
                            //Для удаления всех событий оставляем .off() без аргументов
                        </pre>
                        <!--                        10-->
                        <h5>Проф. управление событиями</h5>
                        <pre class="brush: jscript">
                            $(‘#селектор’).on(‘событие мыши’, селектор, данные, имя функции);
                        </pre>
                        <div class="card-panel">
                            Первый аргумент — это строка, содержащая имя события: например, щелчок, наведение курсора. Второй
                            аргумент не обязателен, он должен представлять собой допустимый селектор, например, tr.callout или #alarm. Третий
                            аргумент — это данные, которые вы желаете передать функции (в форме литерала объекта либо переменной, содержащей
                            литерал объекта) это список имен функций и их значения:
                        </div>
                            <pre class="brush: jscript">
                                {
                                    firstName : ‘Иван’,
                                    lastName : ‘Иванов’
                                }
                            </pre>
                        <div class="card-panel">
                            Четвертый аргумент – другая функция, которая выполняет действие при запуске события.
                            Предположим, вы хотели бы создать всплывающее окно оповещение в ответ на событие, но сообщение в окне
                            должно  быть разным в зависимости от того, какой элемент инициировал событие. Один из способов сделать это —
                            создать  переменные, хранящие различные объектные константы, а затем передать переменные функции <b>on()</b>:
                        </div>
                        <pre class="brush: jscript">
                            var linkVar = {message:'Привет от ссылки'};
                            var pVar = {message :'Привет от абзаца'};
                            function showMessage(evt) {
                                alert(evt.data.message);
                            }
                            $('a').on('mouseover', linkVar, showMessage);
                            $('p').on('click', pVar, showMessage);
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Анимация и эффекты</div>
                    <div class="collapsible-body">
                        <div class="card-panel">
                            <h5>Основы отображения и скрытия</h5>
                            <b>show()</b> показывает ранее скрытый элемент, он не работает когда элемент уже видим на странице,
                            если не устанавливать значение скорости, появление происходит моментально.
                            <b>hide()</b> скрывает видимый элемент, не работает если элемент уже скрыт<br>
                            <b>toggle()</b> переключает между состояниями элемента, скрыт/отображен<br>
                        </div>

                        <div class="card-panel">
                            <h5>Постепенное появление и исчезновение элементов</h5>
                            <b>fadeIn()</b> постепенно показывает скрытый элемент через уменьшение прозрачности<br>
                            <b>fadeOut()</b> постепенно скрывает элемент, используя прозрачность<br>
                            <b>fadeToggle()</b> переключает эффекты <b>fadeIn/fadeout</b><br>
                            <b>fadeTo()</b> изменяет степень прозрачности на установленное значение, обязательно указывается
                            скорость срабатывания, прозрачность указывается от 0 до 1(0.75=75%) Данная функция меняет прозрачность вне
                            зависимости от того виден элемент или нет
                        </div>
                        <pre class="brush: jscript">$(‘p’).fadeTo(‘normal’,.75)</pre>

                        <div class="card-panel">
                            <h5>Скользящие элементы</h5>
                            <b>slideDown()</b> заставляет скрытый элемент появится в поле зрения, сначала появляется верхняя
                            часть и по мере проявления элемента контент передвигается вниз.<br>
                            <b>slideUp()</b> удаляет элемент из виду скрывая его нижнию часть и двигая все что находится ниже –
                            вверх.<br>
                            <b>slideToggle()</b> переключает состояние элемента.<br>
                        </div>

                        <h5>Код для выпадающей менюхи</h5>
                        <pre class="brush: jscript">
                            $(document).ready(function () {
                                $('#open').click(function (evt){
                                    evt.preventDefault();//не позволяет перейти по ссылке(для тех у кого выкл java)
                                    $('#login form').slideToggle(600);
                                    $(this).toggleClass('close');
                                });//окончание click
                            });//окончание ready
                        </pre>
                            <p>Или для разных эффектов:</p>
                        <pre class="brush: jscript">
                            $(document).ready(function () {
                                $('#open').click(function (evt){
                                    evt.preventDefault(); //не позволяет перейти по ссылке(для тех у кого выкл java)
                                    if ($('#login form').is(':hidden')){
                                        $('#login form').slideDown(600);
                                        $(this).addClass('close');
                                    } else {
                                        $('#login form').fadeOut(600);
                                        $(this).removeClass('close');

                                    }
                                });//окончание click
                            });//окончание ready
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Анимация средствами jQuary(.animate)</div>
                    <div class="collapsible-body">
                        <pre class="brush: jscript">
                            $('#message').animate(
                                {
                                 left: '650рх',
                                 opacity: .5,
                                 fontSize: '24px';
                                 }, 1500
                            );
                        </pre>
                        <div class="card-panel">
                            Функция <b>animate()</b> может принимать несколько аргументов. Первый — это литерал объекта, содержащий
                            свойства CSS, которые вы желаете анимировать, может задаваться относительно текущего его значения, выражениями
                            <b>+= и -=</b>.
                            Второй — это длительность анимации (в милли­секундах). Чтобы анимировать положение элемента с
                            использованием свойств <b>CSS left, right, top или bottom</b>, вы должны установить значение свойства <b>CSS position на absolute или relative</b>.
                            Язык JavaScript не принимает дефисы в именах свойств CSS. Например, <b>font-size</b> — это свойство CSS,
                            но JavaScript не понимает его, поскольку дефис имеет особое значение (в языке JavaScript дефис
                            соответствует операции «минус»). При использовании свойств CSS в JavaScript удалите дефис и сделайте заглавной первую
                            букву слова, следующего за дефисом. Например, <b>font-size</b> станет <b>fontSize</b>, a
                            <b>border-width</b> — <b>borderWidth</b>. Однако если вы предпочитаете имена свойств, принятые в CSS (во избежание
                            путаницы), заключайте их в кавычки <b>‘font-size’ : ‘24pt’;</b>
                        </div>

                        <div class="card-panel">
                            <h5>Управление скоростью анимации(библиотека JQ_UI)</h5>
                            <b>easing</b> – контролирует скорость во время анимации, имеет два метода: linear и swing
                            <b>easing:linaer</b> – равномерная анимация, каждый шаг анимации подобен остальным.
                            <b>easing:swing</b> – анимация начинается в более быстром темпе потом замедляется
                            пример:
                        </div>
                        <pre class="brush: jscript">
                            $(‘#element’).slideUp(1000, ‘linear’);
                        </pre>
                        <div class="card-panel">
                            При использовании функции <b>animate()</b> метод <b>easing</b> указывается в качестве третьего аргумента
                            после объектной константы, содержащей свойства CSS, которые вы хотите анимировать, и значения общей
                            скорости
                            анимации.
                        </div>
                        <pre class="brush: jscript">
                            $(‘#message’).animate(
                            {
                                left: ‘650рх’,
                                opacity: .5,
                                fontSize: ‘24px'
                            },
                            1500,
                            ‘linear’
                            );
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Ajax запросы</div>
                    <div class="collapsible-body">
<!--                        <b>load()</b> - загружает HTML-файл в указанный элемент на стра­нице.-->
<!--                        <pre class="brush: jscript">-->
<!--                            //Путь к файлу указывается относительно файла использующего метод load() !-->
<!--                            $ ('#headlines').load('news/todays_news.html');-->
<!---->
<!--                            //Можно указать конкретную часть документа для загрузки-->
<!--                            $ ('#headlines').load('news/todays_news.html #news');-->
<!--                        </pre>-->
                        <b>get() и post()</b> базовая структура
                        <pre class="brush: jscript">
                            $.get(url,  data,  callback);
                            $.post(url,  data,  callback);

                            $.get('rateMovie.php', 'rating=5&user=BoBa');
                            $.post('rateMovie.php', 'rating=5&user=BoBa');
                        </pre>
                        При работе с функциями не используется селектор, достаточно символов <b>$.</b>
                        При сложных фрагментах передаваемых данных можно использовать литерал
                        <pre class="brush: jscript">
                            $.post('rankMovie.php',  { rating: 5 });

                            //или

                            var data = {
                                rating: 5,
                                user: 'Вова'
                            }
                            $ . post('rankMovie.php', data) ;

                            //или

                            $.post('rankMovie.php',
                                {
                                    rating: 5,
                                    user: 'Вова'
                                }
                            );
                        </pre>
<!--                        ---->
                        <h5>Обработка данных с сервера</h5>
                        <pre class="brush: jscript">
                            //Выбирает каждую ссылку (элемент а) внутри другого эле­мента с идентификатором message
                            $('#message а').click(function()  {

                                //Извлекает атрибут ссылки HREF, так, например, переменная href может содержать URL-адрестипа rate.php?гatе=5&moviе=123
                                var href = $(this).attr('href');

                                //Извлекает часть кода после знака «?» в URL-адресе, исполь­зуя метод slice()
                                var  querystring = href.slice(href.indexOf('?')+1);

                                //Ajax-запрос. Используя метод GET, за­прос, содержащий строку запроса для ссылки, направляется серверному файлу  rate.php
                                $.get('rate.php', querystring, processResponse);

                                //Предотвращает стандартное поведение ссылки и не дает браузеру загрузить связанную с ней стра­ницу.
                                return false;  //  блокировать  переход по  ссылке
                            });


                            $.get('file.php',  data,  function(data,status)  {
                                //Код функции обратного вызова помещается сюда
                            });
                        </pre>
<!--                        ---->
                        <h5>Пример запроса</h5>
                        <pre class="brush: jscript">
                            $.post('/handlers/mailchimp_subscription.php', {"email": email, "subscribeForm": "Ok"}, function (data) {
                            var answer = JSON.parse(data);
                        </pre>
                            <div class="card-panel">
                                <b>/handlers/mailchimp_subscription.php</b> - файл которому отправляются данные для
                                обработки<br>
                                <b>"email": email и "subscribeForm": "Ok"</b> - в кавычках название переменных, через <b>:</b>
                                их
                                значение<br>
                                <b>function (data)</b> - функция обратного вызова, в ней выполняем операции с даннми что вернет
                                хендлер
                                <b>data</b> - переменная в которой находится информация-ответ от хендлера, для того что бы в
                                него
                                в него попадала информация в зхендлере необходимо вызвать вывод этой информации
                                (<b>echo</b>)<br>
                                <b>JSON.parse(data)</b> - функция преобразовывающая JSON в массив<br>
                            </div>
                            <pre class="brush: jscript">
                            $(function () {
                                $('#subscribeForm button').click(function(evt){

                                    //Отключаем обычное поведение
                                    evt.preventDefault();

                                    // var form_data = $("#subscribeForm").serializeArray;
                                    //serializeArray - возвращает JSON обьект из массива

                                    //Получаем значение поля формы
                                    var email = $('#subscribeForm-email').val();

                                    //Выполняем ajax запрос
                                    $.post('/handlers/mailchimp_subscription.php', {"email": email, "subscribeForm": "Ok"}, function (data) {
                                        var answerAjax = JSON.parse(data);

                                        /*проверка ответа param @answer[0] - сожержит код ответа от form->validate(0-мыло не валид/1-ок) answer[1]-
                                        answer[1] содержит текст ответа*/
                                        if (answerAjax["state"] == "ok") {
                                            $('#subscribeHeader').slideUp();
                                            $('#subscribeForm').slideUp();
                                            $('#ftrTooltip').slideDown().html("<div class='alert-success'>" + answerAjax["message"] + "</div>");
                                        } else if (answerAjax["state"] == "error") {
                                            $('#subscribeHeader').slideUp();
                                            $('#subscribeForm').slideUp();
                                            $('#ftrTooltip').slideDown().html("<div class='alert-danger'>" + answerAjax["message"] + "</div>");
                                        }
                                    });//end post.ajax
                                });//end click
                            });//end ready
                        </pre>
                        <h5>Handler на php</h5>
                        <pre class="brush: php">
                            $form = new MailchimpForm();

                            //Проверка формы на корректность и сабмит
                            if (!$form->isOk()) {
                                echo json_encode(array("state" => "error", "message" => $form->errors[0]["text"]));
                                exit();
                            }

                            //Выбираем спискок подписки
                            $mailchimpList = Settings::$region == "US" ? MailChimp_API::EN_FELLOWS : MailChimp_API::RU_FELLOWS;

                            $mailСhimp = new MailChimp_API($_POST['email'], "manual_web");

                             if ($mailСhimp->subscribe($mailchimpList, array('double_optin' => false))){
                                 echo json_encode(array("state" => "ok", "message" => "You have been successfully subscribed to our newsletter!"));
                             } else {
                                 echo json_encode(array("state" => "error", "message" => "An error occurred, please try again later"));
                             }
                        </pre>
                        <b>json_encode</b> - возвращает JSON-представление данных. В JS это <b>serializeArray</b>
                    </div>
                </li>

            </ul>


            <!--            Конец jQuary-->

        </div>
        <div id="curl" class="col">

            <!--            Начало curl-->

            <ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Подключение и настройка cURL</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        //require_once 'vendor/autoload.php'; //подключаем composter

                        //инициализация обьекта CURL
                        $ch = curl_init('http://ya.ru');

                        /*Опции курл*/
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //опция, для сохранения результатов запроса в переменную
                        curl_setopt($ch, CURLOPT_HEADER, TRUE); //опция, получать заголовки http пакетов
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //следовать за редиректами
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); //отключение проверки https
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); //отключение проверки https

                        //выполнение запроса дескриптора $ch
                        $html = curl_exec($ch);

                        //закрыть дескриптор
                        curl_close($ch);

                        //Вывод выполнения дескриптора
                        print($html);
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Передача заголовка/header</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        $headers = array(
                            'Content-Type:application/json',
                            'Authorization: Basic '. base64_encode("user:password")
                        );
                        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Передача логин/пароль для API</div>
                    <div class="collapsible-body">
                    <pre class="brush: php">
                        $process = curl_init($host);
                        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
                        curl_setopt($process, CURLOPT_HEADER, 1);
                        curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
                        curl_setopt($process, CURLOPT_TIMEOUT, 30);
                        curl_setopt($process, CURLOPT_POST, 1);
                        curl_setopt($process, CURLOPT_POSTFIELDS, $payloadName);
                        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);

                        $return = curl_exec($process);
                        curl_close($process);

                    </pre>

                        <!--                Конец curl-->


                    </div>
        </div>
        <div id="twig" class="col">


            <!--            Начало twig-->

            <ul class="collapsible popout" data-collapsible="accordion">

                <li>
                    <div class="collapsible-header">Подключение</div>
                    <div class="collapsible-body">
                        <pre class="brush: php">
                            require_once $_SERVER['DOCUMENT_ROOT'] . "/include/Twig/Autoloader.php";
                            Twig_Autoloader::register();

                            //template - папка с шаблонами
                            $loader = new Twig_Loader_Filesystem('template');
                            $twig = new Twig_Environment($loader, array('cache' => '/cache'));

                            //рендеринг странци
                            echo $twig->render('main.html', array('name_corp' => 'AK', 'site' => 'www.dev.com', 'tel' => '911'));
                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Наследование</div>
                    <div class="collapsible-body">
                        <pre class="brush: html">
                            {% extends "base.html" %} – указание родителя

                            {% block title %}Index{% endblock %} – информация в block может быть изменена в дочернем файле
                            {% block head %}
                                {{ parent() }} – подтягивается HEAD предка
                                <style type="text/css">
                                    .important {
                                        color: #336699;
                                    }
                                </style>
                            {% endblock %}
                            {% block content %}
                                <h1>Index</h1>
                                <p class="important">
                                    Welcome to my awesome homepage.
                                </p>
                            {% endblock %}

                        </pre>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Установка переменных</div>
                    <div class="collapsible-body">
                        <pre class="brush: html">
                            {% set foo = 'foo' %}
                            {% set foo = [1, 2] %}
                            {% set foo = {'foo': 'bar'} %}
                        </pre>
                        Глобальные переменные:<br>
                        <b>_self</b>: ссылки на текущий шаблон;
                        <b>_context</b>: ссылки на текущий контекст;
                        <b>_charset</b>: ссылки на текущую кодировку
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">Фильтры</div>
                    <div class="collapsible-body">
                        Переменные могут быть изменены фильтрами. Фильтры отделяются от переменной символом <b>|</b>
                        и могут иметь необязательные аргументы в круглых скобках.<br>
                        <b>abs</b> возвращает абсолютное значение числа:<br>
                        <pre class="brush: html">
                            {# number = -5 #}
                            {{ number|abs }}
                            {# Результат: 5 #}
                        </pre>
                        <b>batch</b> разбивает массив на подмассивы с количеством элементов равным первому переданному
                        аргументу. Второй параметр используется, чтобы заполнить недостающие элементы:<br>
                        <pre class="brush: html">
                            {% set items = ['a', 'b', 'c', 'd', 'e', 'f', 'g'] %}
                            <table>
                              {% for row in items|batch(3, 'No item') %}
                                <tr>
                                  {% for column in row %}
                                    <td>{{ column }}</td>
                                  {% endfor %}
                                </tr>
                              {% endfor %}
                            </table>
                        </pre>
                        <b>capitalize</b> преобразует входную строку. Первый символ будет в верхнем регистре, остальные - в нижнем:<br>
                        <pre class="brush: html">
                            {{ 'drupal 8'|capitalize }}
                            {# Результат: 'Drupal 8' #}
                        </pre>
                        <b>convert_encoding</b> преобразует строку из одной кодировки в другую. Первым аргументом
                        является текущая кодировка, вторым - ожидаемая кодировка. Для использования данного фильтра
                        должны быть установлены расширения Iconv или MBstring. В случае, если установлены оба, MBstring
                        используется по умолчанию.<br>
                        <pre class="brush: html">
                            {{ data|convert_encoding('UTF-8', 'iso-2022-jp') }}
                        </pre>
                        <b>date</b> формирует дату в заданном формате (использует php функцию date()):<br>
                        <pre class="brush: html">
                            {{ node.getCreatedTime()|date('m/d/Y') }}
                        </pre>
                    </div>

            </ul>

<!--            Конец twig-->
        </div>
        <div id="push" class="col">

            <ul class="collapsible popout" data-collapsible="accordion">


<!--                Начало web push-->

                <li>
                    <div class="collapsible-header">Написание клиента</div>
                    <div class="collapsible-body">
                    <pre class="brush: jscript">
                        // firebase-messaging-sw.js
                        importScripts('https://www.gstatic.com/firebasejs/3.6.8/firebase-app.js');
                        importScripts('https://www.gstatic.com/firebasejs/3.6.8/firebase-messaging.js');

                        firebase.initializeApp({
                            messagingSenderId: '<SENDER_ID>'
                        });

                        const messaging = firebase.messaging();
                    </pre>
                    <pre class="brush: jscript">
                        <script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>
                        <script type="text/javascript" src="/firebase_subscribe.js"></script>
                    </pre>
                    </div>
                </li>


<!--                Конец web push-->


        </div>
    </div>

</body>

</html>