<!--php-->
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
