<!--twig-->
<ul class="collapsible popout" data-collapsible="accordion">

    <li>
        <div class="collapsible-header">Подключение</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/Twig/Autoloader.php";
Twig_Autoloader::register();

//template - папка с шаблонами
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => '/cache'));

//рендеринг странци
echo $twig->render('main.html', array('name_corp' => 'AK', 'site' => 'www.dev.com', 'tel' => '911'));
            </pre>
            <a href="https://twig.symfony.com/doc/2.x/intro.html#installation">Official site</a>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Наследование</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="html">
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
            <pre data-enlighter-language="html">
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
           <a href="https://x-twig.ru/filters/">Фильтры</a>
        </div>

</ul>
