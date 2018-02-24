<!--HTML-->
<ul class="collapsible popout" data-collapsible="accordion">

    <li>
        <div class="collapsible-header">Выравниване контейнера по центру</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="html">
<div style="display: block; margin: auto"></div>
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Иконка в span блоке</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="html">
<span class="caret">Текст</span>
            </pre>
            <pre data-enlighter-language="css">
//С символом
.caret::before {
    content: "*";
}

//С иконкой
.caret::before {
    content: '';
    display: inline-block;
    height: 1em;
    width: 1em;
    background-image: url(myicon.png);
}
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
            <pre data-enlighter-language="html">
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
                        <pre data-enlighter-language="html">
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
</ul>
