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
        <div class="collapsible-header">000</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="js">

            </pre>
        </div>
    </li>

</ul>