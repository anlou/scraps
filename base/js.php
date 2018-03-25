<!--JS-->
<ul class="collapsible popout" data-collapsible="accordion">
    <div class="link">
        <a href="http://learn.javascript.ru/js">JS.LEARN</a>
        <a href="http://learn.javascript.ru/data-structures">Структуры данных</a>
    </div>

    <li>
        <div class="collapsible-header">Работа c переменными, преобразование</div>
        <div class="collapsible-body">

            <h5>Строки</h5>
            <pre data-enlighter-language="javascript">
'use strict'; - использовать современный стиль програмирования, указывается в начале документа

var s = prompt("Ввдите текст")

let s = "hello, world" //Обьявление локальной переменной, область видимости внутри { ... }

s.charAt(0) //=>"h": возврощает указанный символ из строки по указаному id.

s.charAt(s.length-1) //=>"d": последний символ.

s.substring(1,4) //=>"ell": 2й, 3й и 4й символы.

s.slice(1,4) //=>"ell": срез массива или строки, от 1 до 4

s.substring(start [, end]) возвращает подстроку, от start до end(не включая)

s.substr(start [, length]) возвращает подстроку, от start длинною в length

s.indexOf("l") //=>2: позиция первого символа l.

s.lastIndexOf("l") //=>10: позиция последнего символа l.

s.indexOf("l",­3) //=>3: позиция первого символа "l", следующего за 3 символом в строке

s.split(",") //=>["hello", "world"] разбивает на подстроки(массив)

array.join(",") //=> формирует строку из массива разделяя ","

s.replace("h","H") //=>"Hello, world": замещает все вхождения подстроки

s.typeof //=> "string" - возвращает тип переменной

s.toUpperCase() //=> "HELLO WORLD" преобразовывает в верхний регистр
s.toLowerCase() //=> "hello world" преобразовывает в нижний регистр

                </pre>
            <h5>Числа</h5>
            <pre data-enlighter-language="javascript">
// Преобразование в число
var s = "12.34";
var num = +s; // 12.34
var nem = parseInt(s); // 12
//или
var nem = parseFloat(s); // 12.34

// Для проверки на число использовать
function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

parseInt('12px'); //=> 12: читает из строки целое число до первого строчного символа.
parseInt('12.3.4'); //=> 12.3: читает из строки дробное число.

isNaN(num); // проверка на число

Math.floor(num) // округляет вниз
Math.ceil(num) // округляет вверх
Math.round(num) // округляет до ближайшего целого
var item = ~~12.3 //=> 12: округление битовым оператором
num.toFixed(1) // округление до выбранного 10ка
num.toLocaleString() // красивый вывод вида 999 888 777

//Математические операции
Math.pow(число, степень) // возведение в степень
Math.sqrt(num) // квадратный корень из числа

s.indexOf("подстрока"[, начальная_позиция]) - выполняет поиск по фрагменту, возвращает -1 если не найдена, или порядковый номер вхождения строки
// Побитовое оператор НЕ "~"
// Проверка if ( ~str.indexOf(...) ) означает, что результат indexOf отличен от -1, т.е. совпадение есть.
                </pre>
            <div class="card-panel">
                <h5>Преобразование переменных</h5>
                <b>toString()</b> - преобразовует обьект в строку<br>
                <b>Number()</b> - преобразовует обьект в число<br>
                <b>var num = +s</b> - преобразование строки в число<br>
                <b>valueOf()</b> - преобразовует остальные обьекты в строку<br>
                <b>serializeArray()</b> - преобразовывает массив в JSON обьект<br>
            </div>
            <h5>Дата</h5>
            <div class="card-panel">
                <b>new Date(datestring)</b>
                Если единственный аргумент – строка, используется вызов Date.parse (см. далее) для чтения даты из неё.
                <br>
                <b>new Date(year, month, date, hours, minutes, seconds, ms)</b>
                <h5>Получение компонентов даты</h5>
                <p>Для доступа к компонентам даты-времени объекта Date используются следующие методы:</p>
                <ul>
                    <li><b>getFullYear()</b>- получить год (из 4 цифр)</li>
                    <li><b>getMonth()</b>- получить месяц, от 0 до 11.</li>
                    <li><b>getDate()</b>- получить число месяца, от 1 до 31.</li>
                </ul>
                <b>getMinutes(), getSeconds(), getMilliseconds()</b>
                <h5>Установка компонентов даты</h5>
                <ul>
                    <li><b>setFullYear()</b>- установить год (из 4 цифр)</li>
                    <li><b>setMonth()</b>- установить месяц, от 0 до 11.</li>
                    <li><b>setDate()</b>- установить число месяца, от 1 до 31.</li>
                </ul>
                <h5>Форматирование и вывод дат</h5>
                <b>date.toLocaleString(локаль, опции)</b>
                <pre data-enlighter-language="javascript">
alert( date.toLocaleString("ru", options) ); // среда, 31 декабря 2014 г. н.э. 12:30:00
alert( date.toLocaleString("en-US", options) ); // Wednesday, December 31, 2014 Anno Domini 12:30:00 PM
                </pre>
            </div>

        </div>
    </li>

    <li>
        <div class="collapsible-header">Функция, и ряд операторов</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
//Обьявление простой функции
var square = function(x) { return x * x; }
            </pre>
            Оператор <b>in</b>
            <pre data-enlighter-language="javascript">
"x" in point //=>true: объект имеет свойство с именем "x"
"z" in point //=>false: объект не имеет свойства с именем "z"
            </pre>
            Оператор <b>instanceof</b> - проверка класса
            <pre data-enlighter-language="javascript">
var current_Class = d instanceof Date; //>=true, обьект d был создан функцей Date
            </pre>
            Операторы <b>&& || ! +=</b>
            <pre data-enlighter-language="javascript">
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
            <pre data-enlighter-language="javascript">
var i = 1, j = ++i;//i и j содержат значение 2
var i = 1, j = i++;//i содержит значение 2, j содержит значение 1
            </pre>
            <div class="card-panel">
<b>void</b> - указывается перед операндом. Он вычисляет значение операнда, за тем отбрасывает его и
возвращает undefined.<br>
Инициализаторы объектов
            </div>
            <pre data-enlighter-language="javascript">
var p = { x:2.3, y: 1.2 }; //Объект с 2 свойствами
var q = {}; //Пустой объект без свойств
q.x = 2.3; q.y = 1.2; //Теперь q имеет теже свойства, что и p
            </pre>
            <div class="card-panel">
                <b>throw</b> - позволяет генерировать исключения, определяемые пользователем. При этом выполнение
                текущей функции будет остановлено (инструкции после throw не будут выполнены), и управление будет
                передано в первый блок catch в стеке вызовов. Если catch блоков среди вызванных функций нет, выполнение
                программы будет остановлено.
            </div>
            <pre data-enlighter-language="javascript">
throw "Error2"; // генерирует исключение, значением которого является строка
throw 42;       // генерирует исключение, значением которого является число 42
throw true;     // генерирует исключение, значением которого является логическое значение true
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Массивы</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
var arr = []; // Создать пустой массив

var arr = new Array; // Создать пустой массив

arr.push("zero") // Добавляет элемент в конец массива. a = ["zero"]

arr.push("one", "two") // Добавляет еще два элемента. a = ["zero", "one", "two"]

arr.unshift("three") // Добавляет элемент в начало массива.

arr.shift() / Удаляет элемент в начале массива и возвращает его значение. В отличии от оператора delete, свдвигает все элементы вниз на позицию ниже их текущих индексов

arr.pop() // Удаляет элемент в конце массива и возвращает его значение.

delete arr[1]; // теперь в массиве a отсутствует элемент с индексом 1

1 in arr // => false: индекс 1 в массиве не определен

var $temp = arr.pop() // уменьшает длину массива на 1 и возвращает значение удаленного элемента
            </pre>
            <h5>Обход элементов массива</h5>
            <pre data-enlighter-language="javascript">
var keys = Object.keys(obj);           // Получить массив имен свойств объекта obj
var values = []                        // Массив для сохранения значений свойств
for(var i = 0; i < keys.length; i++) { // Для каждого элемента в массиве
    var key = keys[i];                 // Получить имя свойства по индексу
    values[i] = obj[key];              // Сохранить значение в массиве values
}

arr.forEach(function(){ ... })         // Проходит по каждому элементы массива
arr.forEach(callback[, thisArg])       // Для каждого элемента массива вызывает функцию callback.
            </pre>
            <div class="card-panel">
                Этой функции он передаёт три параметра callback(item, i, arr):<br>
                <b>item</b> – очередной элемент массива.<br>
                <b>i</b> – его номер.<br>
                <b>arr</b> – массив, который перебирается.<br>
            </div>
            <pre data-enlighter-language="javascript">
var arr = ["Яблоко", "Апельсин", "Груша"];
arr.forEach(function(item, i, arr) {
    alert( i + ": " + item + " (массив:" + arr + ")" );
});

arr.filter(callback[, thisArg]) // Используется для фильтрации массива через функцию. Он создаёт новый массив, в который войдут только те элементы arr, для которых вызов callback(item, i, arr) возвратит true.

var arr = [1, -1, 2, -2, 3];
var positiveArr = arr.filter(function(number) {
    return number > 0;
});
alert( positiveArr ); // 1,2,3

arr.every/arr.some // Метод «arr.every(callback[, thisArg])» возвращает true, если вызов callback вернёт true для каждого элемента arr. Метод «arr.some(callback[, thisArg])» возвращает true, если вызов callback вернёт true для какого-нибудь элемента arr.

var arr = [1, -1, 2, -2, 3];
function isPositive(number) {
    return number > 0;
}
alert( arr.every(isPositive) ); // false, не все положительные
alert( arr.some(isPositive) ); // true, есть хоть одно положительное

            </pre>
            <div class="card-panel">
                Методы <b>indexOf()</b> и <b>lastIndexOf()</b> отыскивают в массиве элемент с указанным значением и
                возвращают индекс
                первого найденного элемента или –1, если элемент с таким значением отсутствует. Метод <b>indexOf()</b>
                выполняет поиск от начала массива к концу, а метод <b>lastIndexOf()</b> – от конца к началу.
            </div>
            <pre data-enlighter-language="javascript">
a = [0, 1, 2, 1, 0];
a.indexOf(1)       // => 1: a[1] = 1
a.lastIndexOf(1)   // => 3: a[3] = 1
a.indexOf(3)       // => -1: нет элемента со значением 3
            </pre>

            <div class="card-panel">
                <h5>Методы Array</h5>
                <b>Array.join(";")</b> преобразует все элементы массива в строки, противоположность .split<br>
                <b>String.split(",")</b> преобразует строку в массив по разделителю<br>
                <b>Array.slice()</b> возвращает фрагмент, или подмассив, указанного массива<br>
                <b>Array.splice(index[, deleteCount, elem1, ..., elemN])</b>
                Удалить deleteCount элементов, начиная с номера index, а затем вставить elem1, ..., elemN на их место.
                Возвращает массив из удалённых элементов.<br>
                <b>Array.slice(begin, end)</b> копирует участок массива от begin до end, не включая end. Исходный массив
                при этом не меняется.<br>
                <pre data-enlighter-language="javascript">
var ary = [1, 2, 3];
ary.join();              // => "1,2,3"
ary.join(" ");           // => "1 2 3"
ary.join("");            // => "123"

var a = [1,2,3,4,5];
a.slice(0,3);   // Вернет [1,2,3]
a.slice(3);     // Вернет [4,5]
                </pre>
                <b>Array.sort(fn)</b> сортировка массива<br>
                Для указания своего порядка сортировки в метод arr.sort(fn) нужно передать функцию fn от двух элементов,
                которая умеет сравнивать их.<br>
                <pre data-enlighter-language="javascript">
function compareNumeric(a, b) {
    if (a > b) return 1;
    if (a < b) return -1;
}

//или более просто

function compareNumeric(a, b) {
    return a - b;
}

var arr = [ 1, 2, 15 ];

arr.sort(compareNumeric);

alert(arr);  // 1, 2, 15
                </pre>
                <p>Или в одну строку</p>
                <pre data-enlighter-language="javascript">
function compareNumeric(a, b) {
    return a - b;
}
                </pre>
                <b>arr.concat(value1, value2, … valueN)</b> - создаёт новый массив, в который копируются элементы из
                arr, а также value1, value2, ... valueN.
                <pre data-enlighter-language="javascript">
var arr = [1, 2];
var newArr = arr.concat(3, 4);

alert( newArr ); // 1,2,3,4
                </pre>
                <b>indexOf/lastIndexOf / arr.indexOf(searchElement[, fromIndex])</b> - возвращает номер элемента
                searchElement в массиве arr или -1, если его нет. Поиск начинается с номера fromIndex, если он
                указан<br>

                <h5>Преобразование ключей обьекта в массив</h5>
                <b>Object.keys(obj)</b>
                <pre data-enlighter-language="javascript">
var user = {
    name: "Петя",
    age: 30
}

var keys = Object.keys(user);

alert( keys ); // name, age
                </pre>
            </div>
        </div>
    </li>


    <li>
        <div class="collapsible-header">Обьекты</div>
        <div class="collapsible-body">
            <h5>Создание обьекта</h5>
            <pre data-enlighter-language="javascript">
obj = new Object();
obj = {};

var menuSetup = {
    width: 300,
    height: 200,
    title: "Menu"
};
// то же самое, что:
var menuSetup = {};
menuSetup.width = 300;
menuSetup.height = 200;
menuSetup.title = 'Menu';

delete person.age // удаление св-ва обьекта

//Проверка наличия св-ва в обьекте.
if ("age" in person) {
    alert( "Свойство name существует!" );
}
person.age === undefined //=> true

//Для доступа у сво-ву имя которгового находится в переменной
let property = "age";
person[property] = 28;

            </pre>

            <h5>Свойства обьекта</h5>
            <pre data-enlighter-language="javascript">
// Для перебора св-в обекта
for (var key in obj) {
    /* ... делать что-то с obj[key] ... */
}

// Количество св-в в обьекте
Object.keys(obj).length
            </pre>

            <h5>Клонирование обьекта</h5>
            <pre data-enlighter-language="javascript">
//Создание ССЫЛКИ на обьект

var user = { name: 'Вася' };
var admin = user;

admin.name = 'Петя'; // поменяли данные через admin
alert(user.name); // 'Петя', изменения видны в user

//Создание КЛОНА обьекта
var user = {
    name: "Вася",
    age: 30
};

var clone = {}; // новый пустой объект

// скопируем в него все свойства user
for (var key in user) {
    clone[key] = user[key];
}

// теперь clone - полностью независимая копия
clone.name = "Петя"; // поменяли данные в clone

alert( user.name ); // по-прежнему "Вася"
            </pre>

            <div class="card-panel">
                <h5>Прототипы</h5>
                <b>Object.prototype</b> - содержит прототип(родитель) обьекта.<br>
                <b>Object.create()</b> - создаёт новый объект с указанными объектом прототипа и свойствами.<br>
            </div>
            <pre data-enlighter-language="javascript">
var o1 = Object.create({x:1, y:2}); //o1 наследует свойства x и y.
item1.prototype = protoType; //установка прототипа item1, в item1 будет унаследованы свойства и методы прототипа
            </pre>
            <h5>Удаление свойств</h5>
            <pre data-enlighter-language="javascript">
delete book.author; //Теперь объект book  не имеет свойства author.
delete book["main­title"]; //Теперь он не имеет свойства "main­title".
            </pre>
            <h5>Проверка свойств</h5>
            <pre data-enlighter-language="javascript">
var o = { x:1 };
o.hasOwnProperty("x"); //true: o имеет собственное свойство x
o.hasOwnProperty("y"); //false:не имеет свойства y
o.hasOwnProperty("toString"); //false:toString наследуемое свойство

"x" in o;        //true: o имеет собственное свойство "x"
"y" in o;        //false: o не имеет свойства "y"
"toString" in o; //true: o наследует свойство toString
            </pre>
            <h5>Перечисление св-в</h5>
            <pre data-enlighter-language="javascript">
var o = {x:1, y:2, z:3};
for(p in o)                        //Цикл по свойствам
    console.log(p);                //Выведет x, y и z, но не toString
            </pre>
            <h5>Чтения/getter и записи/setter свойств</h5>
            <pre data-enlighter-language="javascript">
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
                <b>Object.defineProperty()</b> - определяет новое или изменяет существующее свойство непосредственно на
                объекте, возвращая этот объект.<br>
                Object.defineProperty(obj, prop, descriptor)<br>
                <b>obj</b> - Объект, на котором определяется свойство.
                <b>prop</b> - Имя определяемого или изменяемого свойства.
                <b>descriptor</b> - Дескриптор определяемого или изменяемого свойства.
            </div>
            <pre data-enlighter-language="javascript">
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
        <div class="collapsible-header">Цепочка вызвов</div>
        <div class="collapsible-body">
            <p>Есть код</p>
            <pre data-enlighter-language="javascript">
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
            <pre data-enlighter-language="javascript">
ladder.up();
ladder.up();
ladder.down();
ladder.showStep(); // 1
            </pre>
            <p>Чтобы вызовы можно было делать цепочкой, вот так</p>
            <pre data-enlighter-language="javascript">
ladder.up().up().down().up().down().showStep(); // 1
            </pre>
            <p>Необходимо модифицировать код методов так, что бы они возвращали обьект</p>
            <pre data-enlighter-language="javascript">
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
        <div class="collapsible-header">Дестриктуризация, метод spread "..."</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
'use strict';

let [firstName, lastName, ...rest] = "Юлий Цезарь Император Рима".split(" ");

alert(firstName); // Юлий
alert(lastName);  // Цезарь
alert(rest);      // Император,Рима (массив из 2х элементов)
            </pre>
            <p>Метод "<b>...</b>" собирает все остальные элемениты массива
        </div>
    </li>

    <li>
        <div class="collapsible-header">eval()</div>
        <div class="collapsible-body">
            <div class="card-panel">
                <p>При передачи числа вернет число, при передачи строки будет пробовать интерпритировать как код на JS
                    в случае неудачи вернет SyntaxError, в случае успеза вернет значение из return переданного кода.
            </div>
            <pre data-enlighter-language="javascript">
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
            <pre data-enlighter-language="javascript">
var a = 5; // объявление var создаёт свойство window.a
alert(window.a); // 5

window.a = 5; // cоздать переменную можно и явным присваиванием в window
alert(a); // 5
            </pre>
            <pre data-enlighter-language="javascript">
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
        <div class="collapsible-header">Определение мобильных устройств из JavaScript</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    //какой-то код...
}

//или более полная версия

var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Преобразование переменных и обьектов</div>
        <div class="collapsible-body">
                    <pre data-enlighter-language="javascript">

                    </pre>
        </div>
    </li>


</ul>
