<!--JQ-->
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
            <h5>Оборачиваем элементы в div</h5>
            <pre class="brush: jscript">
                            var img = $('<img/>'); // создали новые элементы (jQuery-синтаксис)
                            var div = $('<div/>'); // и поместили в переменную

                            img.wrap(div); // обернуть img в div
                            div.append('<span/>');
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
