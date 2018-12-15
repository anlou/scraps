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
            <h5>Более сложный пример с обработко маршрутов</h5>
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
const canadianDollar = 0.91;
function roundTwo(amount) {
    return Math.round(amount * 100) / 100;
}
exports.canadianToUS = canadian => roundTwo(canadian * canadianDollar);
exports.USToCanadian = us => roundTwo(us / canadianDollar);

...
Другой файл:

const currency = require('./currency');
console.log('50 Canadian dollars equals this amount of US dollars:');
console.log(currency.canadianToUS(50));
console.log('30 US dollars equals this amount of Canadian dollars:');
console.log(currency.USToCanadian(30));
            </pre>
            <div class="card-panel">
                Механизм <b>module.exports</b> позволяет экспортировать одну переменную, функцию или объект. Если вы создаете модуль, который заполняет как exports,
                так и <b>module.exports</b>, то возвращается module.exports, а exports игнорируется
            </div>
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