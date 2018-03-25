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
		</div>
	</li>


</ul>