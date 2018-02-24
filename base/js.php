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
var num = +s ; // 12.34

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
        <div class="collapsible-header">Преобразование переменных и обьектов</div>
        <div class="collapsible-body">
                    <pre data-enlighter-language="javascript">

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
