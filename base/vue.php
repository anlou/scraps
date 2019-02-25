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

            <h5>Общая конструкция</h5>
            <pre data-enlighter-language="javascript">
'use strict';

Vue.component('greet', {
    props: ['person', 'array_key'],
    // props - служит для передачи данных в компонент из вне. В базовом: <vue-item :list="anyArrayList">
    template: '<h2>{{ list.todo }}</h2>',
    // template - сам шаблон из html
    data: function () {
        // data тот же обьект с данными толкьо в компонент передается как function с return
        return {
            title: 'Hello batman'
        }
    }
});

new Vue({
    el: "#app",
    // el - выбираем елемент по селектору

    data: {
        // data - инициализируем и передаем данные
        title: 'Title'
    },

    methods: {
        // методы для елемента
        addSome: function cTitle() {
            this.title = this.$refs.input.value;
        }
    },

    computed: {
    // computed - вычисляемые свойства
    titleVue: function () {
        return this.title;
    },

    watch: {
    // watch - раздел для слжение за изменением переменной, в данном случае запускает selectAllAb при изменении переменной checkAllInputAB
        checkAllInputAB: function() {
            this.selectAllAb();
        }
    }
}

});
            </pre>

            <h5>Обявление комонента внутри обьекта</h5>
            <pre data-enlighter-language="javascript">
let findComponent = new Vue({
    el: '#ab-search-component',
    delimiters: ['${', '}'],
    name: 'findComponent',
    // имя компонента, пишем в офрмате upcase в html теге подключем через <find-сomponent></find-сomponent>

    // темплейт
    template: [
        '<div id="ab-search">',
        '<input v-model="inputFindVal" type="text" maxlength="128" autocomplete="off" name="strpos" placeholder="{{ site._("Searching by email, display name, %id_name")|replace({"%id_name": settings.id_name}) }}" />',
        '<img @click="clearFinder()" src="/images/ab-cross.png" alt="" />',
        '</div>'
    ].join(''),


    data: {
        inputFindVal: "",
        clearFindImg: $('#ab-search img')
    }, .....
            </pre>
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
            <pre data-enlighter-language="javascript">
<!-- событие click не будет всплывать дальше -->
<a v-on:click.stop="doThis"></a>

<!-- событие submit больше не будет перезагружать страницу -->
<form v-on:submit.prevent="onSubmit"></form>

<!-- модификаторы можно объединять в цепочки -->
<a v-on:click.stop.prevent="doThat"></a>

<!-- и использовать без указания метода-обработчика -->
<form v-on:submit.prevent></form>

<!-- можно отслеживать события в режиме capture, т.е. событие, нацеленное -->
<!-- на внутренний элемент, обрабатывается здесь до обработки этим элементом -->
<div v-on:click.capture="doThis">...</div>

<!-- вызов обработчика только в случае наступления события непосредственно -->
<!-- на данном элементе (то есть не на дочернем компоненте) -->
<div v-on:click.self="doThat">...</div>
            </pre>
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

    <li>
        <div class="collapsible-header">Компоненты</div>
        <div class="collapsible-body">

            <pre data-enlighter-language="javascript">
Vue.component('greet', {
    template: '<h2>{{ title }}</h2>',
    data: function () {
        return {
            title: 'Hello batman'
        }
    },
});
            </pre>
            <p>Создали компонени &lt;greet&gt;. В компоненте так же есть массив data, с обьектами, но заполняется он как функция</p>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Ссылки на элементы (Refs)</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="html">
<div id="app">
    <input type="text" ref="input">
    <button @click="cTitle">Submit</button>
    <p ref="parag"></p>
</div>
            </pre>
            <p>Указываем тег <b>ref</b>="имя_компонента". Далее из любого места можем получить к ниму доступ через обьект this.$refs,
                например this.$refs.input.value - доступ к значению input
            </p>
            <p>Ссылки и сам обьек ref существует только после рендеринга!!!</p>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Vue CLI</div>
        <div class="collapsible-body">
            <h5>Установка:</h5>
            <pre data-enlighter-language="js">
npm i -g vue-cli                /флаг g - установить глобально

vue init webpack vue-project    /vue-project - название проэкта

// переходим в папку с проэктом

npm run dev
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Импорт компонентов</div>
        <div class="collapsible-body">
            <p><b>App.vue</b> корневой файл приложения. В App.vue можем добавлять в data() обьекты для использования в приложении и локально добавляеть компоненты, конструкцией</p>
            <pre data-enlighter-language="js">
<template>
  <div id="app">
    <h1>{{ title }}</h1>
    <Reg></Reg>
    <button type="button" @click="component='Reg'">Reg</button>
    <button type="button" @click="component='Auth'">Auth</button>
    <component :is="component"></component>
  </div>
</template>
// ...
<script>
import Auth from './components/Auth';
import Reg from './components/Reg';
// подключаем модули компонентов
export default {
    components: {
        'Auth': Auth,
        'Reg': Reg
    },
    // components - директива для локального подключение компонентов
    data() {
        return {
            title: 'My CLI app',
            component: 'Reg'
        }
    }
}
</script>

            </pre>

            <p><b>main.js</b> добавляет наше приложение Vue в index.html Для глобального добавления компонентов</p>
            <pre data-enlighter-language="js">
import Reg from './components/Reg';
import Auth from './components/Auth';

// и

Vue.component('Reg', Reg);
Vue.component('Auth', Auth);
            </pre>

            <h5>Динамические компоненты (пример выше)</h5>
            <p><b>&lt;component&gt;</b> - специальный тег Vue, для выборки компонентов, с ним используем директиву is:</p>
            <p><b>&lt;keep-alive&gt;</b> - специальный тег Vue, указывающий на то что бы не выгружать переменные из компонента,
                а хранить в памяти, в случае переключения</p>
            <pre data-enlighter-language="js">
<template>
  <div id="app">
    <button type="button" @click="component='Reg'">Reg</button>
    <button type="button" @click="component='Auth'">Auth</button>
      <keep-alive>
          <component :is="component"></component>
      </keep-alive>

  </div>
</template>
// ...
<script>
import Auth from './components/Auth';
import Reg from './components/Reg';
// подключаем модули компонентов
export default {
    components: {
        'Auth': Auth,
        'Reg': Reg
    },
    data() {
        return {
            // специальный тег Vue для динамического переключения компонентов
            component: 'Reg'
        }
    }
}
</script>
            </pre>
        </div>
    </li>



    <li>
        <div class="collapsible-header">Ссылки на элементы (Refs)</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="html">
            </pre>
        </div>
    </li>

</ul>
