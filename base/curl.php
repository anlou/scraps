<ul class="collapsible popout" data-collapsible="accordion">
    <div class="link">
        <a href="http://php.net/manual/ru/book.curl.php">Клиентская библиотека работы с URL</a>
    </div>
    <li>
        <div class="collapsible-header">Подключение и настройка cURL</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
//require_once 'vendor/autoload.php'; //подключаем composter

//инициализация обьекта CURL
$ch = curl_init('http://ya.ru');

/*Опции курл*/
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //опция, для сохранения результатов запроса в переменную
curl_setopt($ch, CURLOPT_HEADER, TRUE); //опция, получать заголовки http пакетов
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); //следовать за редиректами
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); //отключение проверки https
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); //отключение проверки https

//выполнение запроса дескриптора $ch
$html = curl_exec($ch);

//закрыть дескриптор
curl_close($ch);

//Вывод выполнения дескриптора
print($html);
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Передача заголовка/header</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
$headers = array(
    'Content-Type:application/json',
    'Authorization: Basic '. base64_encode("user:password")
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Передача логин/пароль для API</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
$process = curl_init($host);
curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
curl_setopt($process, CURLOPT_HEADER, 1);
curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
curl_setopt($process, CURLOPT_POST, 1);
curl_setopt($process, CURLOPT_POSTFIELDS, $payloadName);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);

$return = curl_exec($process);
curl_close($process);
            </pre>
        </div>
    </li>
</ul>