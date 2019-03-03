<!--node-->
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
        <div class="collapsible-header">Сервер на node</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
const http = require('http');
const port = 8080;
const server = http.createServer((req, res) => {
    res.end('Hello, world.');
});
server.listen(port, () => {
    console.log('Server listening on: http://localhost:%s', port);
});
            </pre>
            <h5>Более сложный пример с обработкой маршрутов</h5>
            <pre data-enlighter-language="javascript">
const http = require('http');
const fs = require('fs');
const path = require('path');

function handleError(error, res) {
    res.writeHead(500, {'Content-Type': 'text/plain'});
    res.end(error.message);
}

http.createServer((req, res) => {
    if (req.url === '/') {
        const stream = fs.createReadStream(path.join(__dirname, 'public', 'index.html'));
        //stream - открываем поток загрузки файла
        stream.on('error', error => handleError(error, res));
        // обоработка ошибки потока файла
        res.writeHead(200, {'Content-Type': 'text/html'});
        // Выставляем заголово и кот ответа сервера
        stream.pipe(res);
        // передаем поток загрузки клиенту, через pipe
    } else if (req.url.match(/.png$/)) {
        const stream = fs.createReadStream(path.join(__dirname, 'public', req.url));
        stream.on('error', error => handleError(error, res));
        res.writeHead(200, {'Content-Type': 'image/png'});
        stream.pipe(res);
    } else if (req.url.match(/.css$/)) {
        const stream = fs.createReadStream(path.join(__dirname, 'public', req.url));
        stream.on('error', error => handleError(error, res));
        res.writeHead(200, {'Content-Type': 'text/css'});
        stream.pipe(res);
    } else if (req.url.match(/.js$/)) {
        const stream = fs.createReadStream(path.join(__dirname, 'public', req.url));
        stream.on('error', error => handleError(error, res));
        res.writeHead(200, {'Content-Type': 'text/javascript'});
        stream.pipe(res);
    } else {
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.end('404 not found');
    }

}).listen(3000, () => console.log('Server start on port 3000'));
            </pre>
            <h5>Обработка POST Запроса</h5>
            <pre data-enlighter-language="javascript">
const http = require('http');
const path = require('path');
const fs = require('fs');

// Для парсинга в JSON
function parseBody(body) {
    const result = {};

    const keyValuePairs = body.split('&');
    keyValuePairs.forEach(keyValue => {
        const [key, value] = keyValue.split('=');
        result[key] = value;
    });

    return result;
}

http.createServer((req, res) => {
// Проверяем метод
    switch (req.method) {
        case 'GET':
            // Если GET запрос передадим форму
            const straem = fs.createReadStream(path.join(__dirname, 'public', 'form.html'));
            res.writeHead(200, {'Contetnt-Type': 'text/html'});
            straem.pipe(res);
            break;
        case 'POST':
            let body = '';
            // Без указания setEncoding в body будет находится буфер
            req.setEncoding('utf-8');
            // Подписываемя на событие получения data e у обьекта запроса
            // И по мере поступления данных добавлем из в body
            req.on('data', data => body += data);
            // Как только все данные получены сработает end, подпишемся на него и обработаем
            req.on('end', () => {
                const data = parseBody(body);
                res.writeHead(200, { 'Content-Type': 'application/json' });
                res.end(JSON.stringify(data));
            });
            break;
    }
}).listen(3000, () => console.log('Сервер работает на 3000 порте'));
            </pre>
            <h5>Сервер на express</h5>
            <pre data-enlighter-language="javascript">
const express = require('express');
const todos = require('./todos');

const app = express();

/**
 * Создание надстроек express, в app.set отправвляется пара 'ключ', 'значение'
 *
 * Устанавливаем шаблонизатор на pug
 */
app.set('view engine', 'pug');

/**
 * Создадим middleware функцию, можно пережать ее напряму в app.use((req, res, next) => ...)
 *
 * @param req
 * @param res
 * @param next передаеся для указания express что после выполнения данной функции нужжно идти дальше
 */
function log(req, res, next) {
    let data = new Date(Date.now());

    console.log(`${data} - ${req.method} - ${req.url}`);
    // теперь выполнение не остановится после этой функции, а пойдет далее
    next();
}
// Тепер функция log сработает при каждом обращении, (но если до нее дойдет очередь, если не указать next)*
app.use(log);

/**
 * express.static - служит для возврата статических файлов, для этого нужно указать папку в которой они расположены
 * Теперь в запросе например site.loc/index.html нам вернет index.html файл который расколожен в каталоге /public/
 * И посколько express.static передана как middleware она будет срабатываеть при каждом запросе сервера
 */
app.use(express.static(__dirname + '/public'));

/**
 * Маршруты
 */
app.get('/', (req, res) => {
    // метод send сам определяет content-type, но метода res.end также остался
    res.send('index');

    // для шаблонизатора нужно использовать res.render('index')
    res.render('index', {
        title: 'Express todo',
        todos: todos
    });
});

app.get('/todos', (req, res) => {
    console.log(req.query);

    if (req.query.completed) {
        // req.query содерждит все переданные параметры. Если передан параметр completed, отсортируем вывод по этому значению
        return res.json(todos.filter(todo => todo.compeleted.toString() === req.query.completed))
    }
    // Для возврата json
    res.json(todos);
});

// Указание параметра в запросе (:id), он будет находится в req.params
app.get('/todos/:id', (req, res) => {
    // req.params.id сожержит :id
    let todo = todos.find(todo => todo.id == req.params.id);
    if (!todo) return res.sendStatus(404);
    res.json(todo);
});

/**
 * Включаем прослушивание порта
 */
app.listen(3000, () => {
    console.log('Server work at 3000');
});
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Модули</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
const data = require('./users');
const User = require('./user');

const users = data.map(({ firstName, lastName }) => new User(firstName, lastName));

function getUsers() {
    return users;
}

function addUser(newUser) {
    users.push(newUser);
}

// Экспортируем
module.exports = {
    getUsers,
    addUser
};

// Или так
module.exports = {
    get: getUser,
    add: addUser
};

// Или так
exports.get = getUser;
            </pre>
            <div class="card-panel">
                Механизм <b>module.exports</b> позволяет экспортировать одну переменную, функцию или объект. Если вы создаете модуль, который заполняет как exports,
                так и <b>module.exports</b>, то возвращается module.exports, а exports игнорируется
            </div>
            <div class="card-panel">
                Также, можно групировать модули в папку, в которой создавать index.js который подключает все внутрение файлы,
                и экспортирует их.
            </div>
            <pre data-enlighter-language="javascript">
// index.js распологается в директории ./db
const db = require('./db');
const User = require('./user');

module.exports = {
    db,
    User,
};
            </pre>
            <pre data-enlighter-language="javascript">
// Использование
const db = require('./db').db;
const User = require('./db').User;

const users = db.getUsers();
const user = new User('Bruce', 'Wayne');

console.log(users);

db.addUser(user);

console.log(users);
            </pre>
            <h5>Конфигурируемый модуль</h5>
            <pre data-enlighter-language="javascript">
function greeting(greetText) {
    return function(name) => `${greetText}, ${name}`
}

// Или такая конструкция
module.exports = greeting => {
    return name => `${greeting}, ${name}`;
};

***

// Использовать так
const greet = require('./greet')('Привет');
const message = greet('Тиски');
console.log(message);            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Events(EventEmitter)</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
const EventEmitter = require('events');

// Создаем экземляр обработчика событий
const emitter = new EventEmitter;

// подписываемся на некое событие start, и определяем call-back функцию которая принимает аргумент message
emitter.on('start', (message) => {
    console.log(message);
});

emitter.emit('start', 'Started');
// emit - запускает событие start и передает в call-back функцию параметр 'Started'

emitter.removeAllListeners();
// removeAllListeners - отключить все слушатели событий
emitter.emit('start', 'Started');
// уже не сработает
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Поток чтения/записи (stream)</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
const fs = require('fs');

// Поток чтения
const stream = fs.createReadStream('index.txt', 'utf-8');
// Поток записи
const output = fs.createWriteStream('index.md');

// Запись в переменную data
let data = '';
// Подписываемся на событие получнеия данных потока, и записываем их в data
stream.on('data', part => data += part);
// Подписываемся на событие end
stream.on('end', () => console.log('End', data.length));

// ***

// Запись сразу в поток
stream.on('data', part => output.write(part));

// Подписываемся на ошибки
stream.on('error', error => console.log(error.message));
            </pre>
            <h5>Свзяка чтения-запись с помощью pipe</h5>
            <pre data-enlighter-language="javascript">
const fs = require('fs');

// Поток чтения
const input = fs.createReadStream('index.txt');
// Поток записи
const output = fs.createWriteStream('index_output.txt');

// Свзяка чтения-запись с помощью pipe
input.pipe(output);
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Сервер на node.js</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
const http = require('http');
const fs = require('fs');
// Для формирования путей используется path
const path = require('path');

// Функиция помошник для формирования ошибки на среврере
function handleError(res, error) {
    // Запишем заголовок ответа
    res.writeHead(500, {'Content-type': 'text/plain'});
    // Вывдадим ошибку
    res.end(error.message);
}


http.createServer((req, res) => {
    if (req.url === '/') {
        // Создадим поток для загрузки index
        const stream = fs.createWriteStream(path.join(__dirname, 'public', 'html', 'index.html'));
        // Обработаем ошибки потока
        stream.on('error', error =>  handleError(res, error));
        // Пропишем заголовки ответа сервера
        res.writeHead(200, {'Content-type': 'text/html'});
        // Передаем данные потока в response, метод pipe звязывает потоки чтения-записи
        stream.pipe(res);

    } else if (req.url.match(/.css$/)) {
        // Обработаем запросы на получения css
        const stream = fs.readFile(path.join(__dirname, 'public', 'style', req.url));
        stream.on('error', error =>  handleError(res, error));

        res.writeHead(200, {'Content-type': 'text/css'});
        stream.pipe(res);

    } else if (req.url.match(/.js$/)) {
        // Обработаем запросы на получения js
        const stream = fs.readFile(path.join(__dirname, 'public', 'js', req.url));
        if (error) handleError(res, error);

        res.writeHead(200, {'Content-type': 'text/javascript'});
        stream.pipe(res);

    } else {
        res.writeHead(404, {'Content-type': 'text/plain'});
        res.end('404 not found');
    }
}).listen(3000, () => console.log('Сервер работает на 3000'));
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Шаблонизатор на node</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
const http = require('http');
const path = require('path');
const fs = require('fs');

/**
 * Вспомогательная функция для парсинга данных переданных POST в json
 *
 * @param body POST         Данные формата name=user&password=Qwerty
 * @return обьект           json формата
 */
function parseBody(body) {
    const result = {};
    // Разьеденим на пары ключ=значение
    const keyValueParse = body.split('&');

    keyValueParse.forEach((keyValue) => {
        // Деструктуризацией присвоим значения в key и value
        const [key, value] = keyValue.split('=');
        // Добавим их в обьект
        result[key] = value;
    });

    return result;
}

/**
 * Вспомогательная функция для шаблонизатора
 *
 * @param templateName          Имя шаблона
 * @param dataForTemplate       Данные для вывода в шаблоне]
 * @param done                  Функция обратного вызова
 */

function render(templateName, dataForTemplate, done) {
    // в методах readFile и createReadStream второй параметр - кодировка, 3 - калбек
    fs.readFile(path.join(__dirname, 'views', `${templateName}.view.html`), 'utf-8', (error, file) => {
        if (error) return done(error);

        let html = file;
        for (let prop in dataForTemplate) {
            // Перебором данных для шаблона меняем на их переданные значения
            // Первый { пишем тот который указан в шаблоне. Пример: <p>{item}</p>
            // regex для замены шаблонными данными в нескольких местах шаблона
            const regex = new RegExp(`{${prop}}`, 'g');
            html = html.replace(regex, dataForTemplate[prop]);
        }
        done(null, html);
    });
}

http.createServer((req, res) => {
    switch (req.method) {
        case 'GET':
            // Для GET запроса выведем форму, используя поток и pipe
            const stream = fs.createReadStream(path.join(__dirname, 'views', 'form.view.html'));
            // Подпишемся на ошибки потока
            stream.on('error', error => console.error(error.message));
            // Отправим заголовок
            res.writeHead(200, {'Content-type': 'text/html'});
            // Направим поток на выдачу
            stream.pipe(res);
            break;
        case 'POST':
            // Если запрос пришел с формы получим данные
            let body = '';
            // Подпишемся на событие получение данных
            req.on('data', data => body += data);
            req.on('end', () => {
                // Подпишемся на событие завршения получения данных
                const data = parseBody(body);
                render('post', data, (error, html) => {
                    if (error) {
                        res.writeHead(500, {'Content-type': 'text/plain'});
                        // Что бы выйти добавим return
                        return res.end(error.message)
                    }

                    res.writeHead(200, {'Content-type': 'text/html'});
                    res.end(html);
                });
            });
            break;
    }

}).listen(3000, () => console.log('Сервер работает на 3000 порте'));
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Автоматический перезапуск сревера для разработки, nodemon</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
{
  "name": "expressCD",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
// Добавляем команлду start с параметром nodemon <имя файла> за которым нужно следить
  "scripts": {
    "start": "nodemon app.js"
  },
  "keywords": [],
  "author": "",
  "license": "ISC",
  "dependencies": {
    "express": "^4.16.4",
// Установим nodemon
    "nodemon": "^1.18.9"
  }
}            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Сервер на Express</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
const express = require('express');
const todos = require('./todos');

const app = express(); // Инициализируем сервер на express

app.get('/', (req, res) => { // Создаем роутер
    res.send('<h1>Express</h1>'); // метод send сам определяет тип контента
});

app.get('/todos', (req, res) => { // обрабытваем еще один роутер
    console.log(req.query); // req.query содержит переаметры переданные в адр. строке, формата .../todos?completed=true

    if(req.query.completed) { // Если передан ключь completed, вывод фильтруем по нему
        res.json(todos.filter(item => item.done.toString() === req.query.completed))
    }

    res.json(todos);
});

app.get('/todos/:id', (req, res) => { // обрабатывает запрос формата /todos/1, где 1 будет параметр под именем id, находится в req.params.id
    let fTodo = todos.find(todo => todo.id == req.params.id);

    if (!fTodo) return res.status(404).send('Не найдено');

    res.json(fTodo);
});


app.listen(3000, () => console.log('Server Work on 3000 port'));

            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Middleware</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">
// Создаем middleware функцию
function log(req, res, next) {
    let date = new Date(Date.now());

    console.log(`${date} - ${req.method} - ${req.url}`);
    res.next(); // Для передачи управления далее, к роутерам
}

// используем use для подключения нашей функции для каждого запроса, до роутов
app.use(log);

app.get('/', (req, res) => {
    res.send('Express');
});
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">000</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">

            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">000</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="javascript">

            </pre>
        </div>
    </li>

</ul>
