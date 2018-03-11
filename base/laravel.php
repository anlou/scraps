<ul class="collapsible popout" data-collapsible="accordion">

	<li>
		<div class="collapsible-header">Установка и базовые комманды</div>
		<div class="collapsible-body">
			<p>В папке с проэктами:</p>
			<pre data-enlighter-language="php">
composer global require "laravel/installer"

composer create-project --prefer-dist laravel/laravel PROJECTname
			</pre>
			<p>Далее настраиваем <b>config/app</b></p>
			<p>И создаем контроллеры, контроллеры находятся в <b>app/http/controllers</b></p>
			<pre data-enlighter-language="php">
php artisan make:controller NameController

//вызов справки
php artisan make:controller --help
			</pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Роутинг</div>
        <div class="collapsible-body">
			<a class="link" href="https://laravel.com/docs/5.6/routing">Офф докуменитация</a>
			<p>Роутинг находится в /routes/web.php</p>
			<pre data-enlighter-language="php">
//посмотреть все правила роутинга
php artisan route::list

Route::post('путь', function () {
    return view('имя_запускаемого_шаблона');
});

Route::get('/', function () {
    return view('welcome');
});

//для маршрутизации всех запросов используется any
Route::any('/', function () {
    return view('welcome');
});

//Можем передавать контроллер и метод через "@"
Route::get('/', 'ControllerName@Method')
Route::get('/', 'HomeController@index')

//Или передавать массив
Route::get('/', 'uses' => 'HomeController@index', 'as' => 'home')
//Что значит что должен отработаь метод index контролелра HomeController

//В роутах можно указывать в пути переменную, формата:
Route::get('massage/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'massage.edit'])->where(['id' => '[0-9]+']);
//where создает правило для переменной id, в данном примере id возможна только цифра.
			</pre>
            Функиця <b>dd($id)</b> => выводит дамп переменной $id
		</div>
	</li>

    <li>
        <div class="collapsible-header">Шаблоны</div>
        <div class="collapsible-body">
            <a class="link" href="https://laravel.com/docs/5.6/blade">Офф докуменитация</a>
            <p>Шаблоны находится в <b>resources/views/</b></p>
            <p>Файлы шаблоны, имеют имя формата: template<b>.blade</b>.php</p>
            <div class="card-panel">
                <i>В расширяемом шаблоне:</i><br>
                - директива <b>@yield('Имя_заменяемой_части')</b> указывается в раширямом шаблоне, ставиться на том месте где необходимо дополнить материалом.<br><br>

                <i>В расширении шаблона:</i><br>
                - директива <b>@extends('Имя_расширяемого_шаблона')</b> указывается в шаблоне в качестве определения шаблона который мы расширяем.<br>
                - директива <b>@section('Имя_секции_для_вставки')</b> указывает в какое место будет вставлено дополнение шаблона, имя должно быть то, что указано в директиве <b>@yield</b><br>
                - закрытие директивы <b>@section('Имя_секции_для_вставки')</b> закрывается с помощью директивы <b>@stop('Имя_секции_для_вставки')</b><br><br>

                Подключение шаблона: <b>@include('Имя_подключаемого_шаблона')</b>. Формата:
            </div>
            <pre data-enlighter-language="php">
@extends('index')
//Расширяем, наследуем шаблон index

@section('content')
//Вставка расширения распологается в указанной секции @yield('content')

@include('_common._form')
//Подключаем шаблон с папки _common

@stop()
//Конец вставки

@parent
//Использование кода родителя

//Для указания вложенности шаблонов используется конструкцуия(в контроллере):
public function index() {
    return view ('page.massages.index');
}
            </pre>
            <h5>Передача переменных</h5>
            <pre data-enlighter-language="php">
//view принимает также параметр $date для передачи переменных в шаблон
public function index() {
$date = [
    'title' => 'Гостевая книга на laravel 5.6',
    'page_title' => 'Гостевая книга'
];
return view ('page.massages.index', $date);
}

//можно передать через ->with():
return view ('page.massages.index')->with($date);
return view ('page.massages.index')->with('title', 'Гостевая книга');
            </pre>
            <div class="card-panel">
                В шаблоне переменная будет выгледеть как <b>{{ $item }}</b>, а в передачи через массив в контроллере <b>['item' => 'Значение']</b><br>
                Контент переданный в переменную будет экранирован в <b>{{ }}</b>, для передачи html сущностей необходимо переменную обернуть в <b>{!! !!}</b>
            </div>
            <h5>Упровляющие конструкции</h5>
            <a class="link" href="https://laravel.com/docs/5.6/blade#control-structures">Офф документация</a>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Миграции</div>
        <div class="collapsible-body">
            <a class="link" href="https://laravel.com/docs/5.6/migrations#generating-migrations">Офф. документация</a>
            <pre data-enlighter-language="php">
php artisan make:migration --help

//Создание миграции
php artisan make:migration create_massage_table --create

php artisan make:migration --table=имя_таблицы --path=путь/к/миграции имя_миграции
//--table=имя_таблицы указывается для создание конструктора под нужную таблицу

//Запуск миграции
php artisan migrate --path=путь/к/миграциям

//Откат всех миграции
php artisan migrate:reset

//Откат последней миграции, или указание кол-ва миграций
php artisan migrate:rollback --step=5

php artisan make:migration --path=путь/для/миграции имя_миграции

            </pre>
            <p>При создании таблици в файле миграции указывается конструкция:</p>
            <pre data-enlighter-language="php">
Schema::create('massage', function (Blueprint $table) {
    $table->string('email', 30);
    ...
});
            </pre>
            <p>При изменении таблици в файле миграции указывается конструкция:</p>
Schema::table('massage', function (Blueprint $table) {
    $table->string('name', 40);
            ...
});
        </div>
    </li>

    <li>
        <div class="collapsible-header">Модели</div>
        <div class="collapsible-body">
            <a class="link" href="https://laravel.com/docs/5.6/eloquent#defining-models">Офф. документация</a>
            <pre data-enlighter-language="php">
php artisan make:model MyModel
            </pre>
            <p>Для создание модели и миграции одновренменно вводим ключь <b>-m</b>:</p>
            <pre data-enlighter-language="php">
php artisan make:model Models/MyModel -m
            </pre>
            <p>Запуск php интерпритатора в консоли:</p>
            <pre data-enlighter-language="php">
php artisan tinker

$msg = new Massage;
$msg->name = 'Vita';
$msg->email = 'vitia@yandex.ru';
$msg->massage = 'First massage';

//Запись в БД
$msg->save();

//Вывод всех записей
Massage::all();

//Получить запись по ID
Massage::find(1);

//Сортировака вывода
Massage::orderBy('created_at', 'desc'(по возврастанию/убыванию))->get()
//Имеются встроенные методы сортировки latest и oldest:
Massage::latest()->get()


//Обновление записи
$m->massage = 'new massage';
$m->save();

//Удаление
$m->delete();
            </pre>
            <p>Существует быстрый способ создание записи в БД через класс:</p>
            <pre data-enlighter-language="php">
Massage::create(['name' => 'Andrey', 'email' => 'andre@mail.ru', 'massage' => 'My Massage']);
            </pre>
            <p>Для его использования нелбходимо в классе добавить записи с перечеслением полей который можно записывать таким образом в переменную:</p>
            <pre>
class Massage extends Model
{
    protected $fillable = ['user', 'email', 'massage'];
}
            </pre>
            <h5>Пагинация</h5>
            <pre data-enlighter-language="php">
$date = [
    'title' => 'Гостевая книга на laravel 5.6',
    'page_title' => 'Гостевая книга',
    'massages' => Massage::latest()->paginate(1),
    'count' => Massage::count()
];
            </pre>
            <p><b>paginate()</b> принимает кол-во записей выводимых на странице, набор полей БД, ключь лля номера текущей страницы, номер страницы.</p>
            <p>Для вывода переключателей страниц используется метод render()</p>
            <pre data-enlighter-language="php">
{!! $massages->render() !!}
            </pre>
        </div>
    </li>


</ul>