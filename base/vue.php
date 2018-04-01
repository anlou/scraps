<ul class="collapsible popout" data-collapsible="accordion">
    <div class="link">
        <a href="https://ru.vuejs.org/v2/guide/index.html">Vue Doc</a>
    </div>
	<li>
		<div class="collapsible-header">Рендеринг</div>
		<div class="collapsible-body">
			<h5>Общие принципы</h5>
			<p>Создание элемента vue:</p>
			<pre data-enlighter-language="javascript">
var ИМЯ_ОБЬЕКТА = new Vue({
  el: '#СЕЛЕКТОР ПО ID(ИЛИ ПО CLASS - ".")',
  data: {
        ПОЛЕ ДЛЯ ВСТАВКИ: 'ЗНАЧЕНИЕ ДЛЯ ВСТАВКИ'
  }
})
			</pre>
            <div class="card-panel">
                Директивы имеют префикс <b>v-</b>, указывающий на их особую природу. Как вы уже могли догадаться, они применяют к отображаемому DOM особое реактивное поведение, управляемое Vue. Например:
                <ul>
                    <li><b>v-bind</b></li>
                    <li><b>v-if</b></li>
                    <li><b>v-for</b></li>
                    <li><b>v-on:</b></li>
                    <li><b>v-model</b></li>
                </ul>
            </div>
        </div>
	</li>


</ul>