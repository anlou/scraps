<ul class="collapsible popout" data-collapsible="accordion">

	<li>
		<div class="collapsible-header">Рендеринг</div>
		<div class="collapsible-body">
			<pre data-enlighter-language="html">
<div id="app">
  {{ message }}
</div>
			</pre>
			<pre data-enlighter-language="javascript">
var app = new Vue({
  el: '#app',
  data: {
    message: 'Привет, Vue!'
  }
})
			</pre>
			<h5>Общие принципы</h5>
			<p>Создание улемента vue:</p>
			<pre data-enlighter-language="javascript">
var ИМЯ_ОБЬЕКТА = new Vue({
  el: '#СЕЛЕКТОР ПО ID(ИЛИ ПО CLASS - ".")',
  data: {
        ПОЛЕ ДЛЯ ВСТАВКИ: 'ЗНАЧЕНИЕ ДЛЯ ВСТАВКИ'
  }
})
			</pre>
            <pre data-enlighter-language="html">
<div id="app-2">
  <span v-bind:title="message">
    Наведи курсор на меня пару секунд,
    чтобы увидеть динамически связанное значение title!
  </span>
</div>
            </pre>
            <pre data-enlighter-language="javascript">
var app2 = new Vue({
  el: '#app-2',
  data: {
    message: 'Вы загрузили эту страницу в: ' + new Date().toLocaleString()
  }
})
            </pre>
            <div class="card-panel">
    Здесь мы встречаемся с чем-то новым. Атрибут <b>v-bind</b>, который вы видите, называется директивой. Директивы имеют префикс <b>v-</b>, указывающий на их особую природу. Как вы уже могли догадаться, они применяют к отображаемому DOM особое реактивное поведение, управляемое Vue. В данном примере директива говорит “сохраняй значение title этого элемента актуальным при изменении свойства message у экземпляра Vue”.

    Если вы снова откроете консоль JavaScript и введёте app2.message = 'какое-то новое сообщение', вы опять-таки увидите, что связанный код HTML — в данном случае, атрибут title — обновился.
            </div>
		</div>
	</li>


</ul>