<!--twig-->
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
