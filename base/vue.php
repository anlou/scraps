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
                    <li><b>v-bind</b> служит привязкой к Data vue. Может быть коротко описан как ":" Например:
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
<span v-if="toggle">Сейчас меня видно</span>
//...
data: {
    toggle: true
}
                        </pre>
                        <span>Также имеет конструкцю <b>v-else</b>. Обьявлется после <b>v-if</b> и может служить свого рода рендерингом по умолчанию:</span>
                        <pre data-enlighter-language="javascript">
<button @click="error = !error">Toggle error</button>
<button @click="success = !success">Toggle success</button>
<p v-if="error">Error message</p>
<p v-else="success">Success message</p>
//...
data: {
    error: false,
    success: true,
},
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
                    <li><b>v-on:</b> для наблюдения за событиями, указав метод-обработчик. Может быть коротко описан как "@" Например:
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

    <li>
        <div class="collapsible-header">Мелкие примеры</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
<div id="app">
    <ul>
        <li v-for="person in people" v-bind:class="{'strike':person.stillAlive}"></li>
    </ul>
</div>
            </pre>
            <p>Перечисляет из массива people, применяет класс strike для элементов с person.stillAlive = true</p>

            <pre data-enlighter-language="javascript">
<div id="app">
    <label for="input">Name:</label>
    <input type="text" @keyUp="chengeName">
</div>
            </pre>
            <p>Запуск функиции chengeName, по нажатию клавиши в инпуте</p>

            <pre data-enlighter-language="javascript">
<input type="text" @keyp.enter="addTask" v-model="currentTask">
<div v-for="todo in tasks">
    <span :class="{'done': todo.complete}">{{ todo.text }}
        <input type="checkbox" v-model="todo.complete">
    </span>
</div>

// ...
data: {
    currentTask,
    tasks: [
        {
            text: 'Уборка',
            complete: false
        },
    ]
}
methods: {
    addTask: function () {
        this.tasks.push({
            text: this.currentTask,
            complete: false
        });
        this.currentTask = '';
    }
}
            </pre>
            <p>Запуск функиции addTask(), по нажатию клавиши в Enter, также содержимое input передается в currentTask (app.currentTask) где можно его использовать в самой функции addTask()</p>
        </div>
    </li>

    <li>
        <div class="collapsible-header">События</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
<input type="text" @keyUp.enter="chengeName">
            </pre>
            <p>Запуск функиции chengeName, по нажатию клавиши enter в инпуте</p>
            <div class="card-panel">
                Модификаторы клавишь:
                <ul>
                    <li><b>.enter</b></li>
                    <li><b>.tab</b></li>
                    <li><b>.delete</b></li>
                    <li><b>.esc</b></li>
                    <li><b>.up</b></li>
                    <li><b>.down</b></li>
                    <li><b>.left</b></li>
                    <li><b>.right</b></li>
                </ul>
            </div>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Вычесляемые свойства</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
let app = new Vue({
    el: '#app',
    data: {
        a: 0,
        b: 0,
        age: 20
    },
    methods: {

    },
    computed: {
        addToA: function () {
            console.log('addToA');
            return this.a + this.age;
        },
        addToB: function () {
            console.log('addToB');
            return this.b + this.age;
        }
    }
});
            </pre>
            <p>Вычесляемые свойствва описываются как методы но в разделе <b>computed</b> Теперь для их использования в html пишем их как свойство</p>
            <pre data-enlighter-language="html">
<span>Age + A = {{ addToA }}</span>
<span>Age + B = {{ addToB }}</span>
            </pre>
        </div>
    </li>

</ul>