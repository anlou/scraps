<!--node-->
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
        <div class="collapsible-header">Сервер на node</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="js">
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
            <pre data-enlighter-language="js">

const express = require('express');
const app = express();
app.get('/', (req, res) => {
    res.send('Hello World!');
});
app.listen(3000, () => {
    console.log('Express web app on localhost:3000');
})
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Модули</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="js">
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
            <pre data-enlighter-language="js">
// index.js распологается в директории ./db
const db = require('./db');
const User = require('./user');

module.exports = {
    db,
    User,
};
            </pre>
            <pre data-enlighter-language="js">
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
            <pre data-enlighter-language="js">
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
            <pre data-enlighter-language="js">
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
            <pre data-enlighter-language="js">
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
            <pre data-enlighter-language="js">
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
            <pre data-enlighter-language="js">
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
        <div class="collapsible-header">000</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="js">

            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">000</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="js">

            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">000</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="js">

            </pre>
        </div>
    </li>

</ul>