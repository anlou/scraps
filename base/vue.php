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
    },
    methods: {
        someMethod: function () {
            что-то делаем;
        }
    }
})
			</pre>
            <div class="card-panel">
                Директивы имеют префикс <b>v-</b>, указывающий на их особую природу. Как вы уже могли догадаться, они применяют к отображаемому DOM особое реактивное поведение, управляемое Vue. Например:
                <ul>
                    <li><b>v-bind</b> служит привязкой к Data vue. Например:
                        <pre data-enlighter-language="javascript">
<a v-bind:href="link">url</a>
// Где link:
//...
data: {
    link: 'www.google.com'
}
// Или болеее короткое написание bind'a:
<a :href="link">url</a>
                        </pre>
                    </li>
                    <li><b>v-if</b> задание условия, например отображение. Например:
                        <pre data-enlighter-language="javascript">
<span v-if="seen">Сейчас меня видно</span>
//...
data: {
    seen: true
}
                        </pre>
                    </li>
                    <li><b>v-for</b> может быть использована для отображения списков, используя данные из массива
                        <pre data-enlighter-language="javascript">
<ol>
    <li v-for="todo in todos">
        {{ todo.text }}
    </li>
</ol>
//...
data: {
    todos: [
        { text: 'Изучить JavaScript' },
        { text: 'Изучить Vue' },
        { text: 'Создать что-нибудь классное' }
    ]
}

                        </pre>
                    </li>
                    <li><b>v-on:</b> для наблюдения за событиями, указав метод-обработчик. Например:
                        <pre data-enlighter-language="javascript">
<button v-on:click="reverseMessage">
//где reverseMessage метод:
...
methods: {
    reverseMessage: function () {
        this.message = this.message.split('').reverse().join('')
    }
}
                        </pre>
                    </li>
                    <li><b>v-model</b> позволяет связывать элементы форм и состояние приложения
                        <pre data-enlighter-language="javascript">
<p>{{ message }}</p>
<input v-model="message">
                            // ...
data: {
    message: 'Привет, Vue!'
}
                        </pre>
                    </li>
                    <li><b>v-html</b> позволяет выводжить разметку html
                        <pre data-enlighter-language="javascript">
<div v-html="markup"></div>
// ...
data: {
    markup: '<li>Some li</li>'
}
                        </pre>
                    </li>
                </ul>
            </div>
        </div>
	</li>


</ul>