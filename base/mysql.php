<!--mysql-->
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
        <div class="collapsible-header">Подключение PDO</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
try {
    $new_db = new PDO('mysql:host=localhost; dbname=nameDateBase', 'userName', 'password');
    $new_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //ATTR_ERRMODE - вывод ошибок ERRMODE_EXCEPTION - режим выброса исключений
    $new_db('SET NAMES "utf8"'); //ВЫбераем кодировку
}
catch (PDOException $e) {
    //обрабатываем исключение при ошибке подключения к БД
}
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Работа с PDO</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
//Для вывода информации с базы данных используется метод QUERY, Он также как и EXEC принимает запросы к базе данных но возвращает объект PDOStatement, который представляет собой результирующий набор.
$sql = "SELECT joketext FROM joke";
$result = $pdo->query($sql);

//Любые команды, exec возвращает кол. изменненых строк
$pdo->exec(запрос);

//отключение от серверая баз данных
$pdo = null;
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Передача незаданного запроса</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
$sql = "INSERT INTO joke SET joketext = :joketext, authorid = :authorid, dateadd = CURRENT_DATE";
        $s = $db->prepare($sql);
        $s->bindValue(':joketext', $_POST['joketext']);
        $s->bindValue(':authorid', $_POST['authorid']);
        $s->execute();
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">MySQLi</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="php">
//При подключении mysqli_connect возвращает Boolean значение
$connect = mysqli_connect("127.0.0.1", "имя пользователя", "пароль", "название базы данных");

if($connect == 'false') {
    echo "Ошибка подключения к БД";
    echo mysqli_connect_error(); //Вернет описание ошибки
}

//Выводит по одной строке из массива
$result = mysqli_query($connect, "SELECT * FROM joke");
$row = mysqli_fetch_assoc($result);

//Проход по всем строкам
while ($row = mysqli_fetch_assoc($result)) {
    echo ($row['joketext']);
}

//Закрывает соедениение с БД
mysqli_close($connect);
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Создание таблици</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
CREATE TABLE joke (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
joketext TEXT,
jokedate DATE NOT NULL
) DEFAULT CHARACTER SET Utf8 ENGINE=InnoDB
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Время</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
INSERT INTO joke SET DATE  = NOW()  - выставит текущее время.

SELECT PERIOD_DIF(p1, p2)  - возвращает количество месяцев между периодами р1 и р2, P1 и P2 должны быть в формате YYMM или YYYYMM
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Сортировка вывода ORDER BY</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
SELECT text, views ORDER BY views  - сортировка по столбцу views

SELECT text, views ORDER BY views DESC  - инверсия сортировки

SELECT text, views ORDER BY views DESC LIMIT 10  - вывод только 10 записей по сортировке

SELECT text, views ORDER BY views DESC LIMIT 10, 20  - постраничный вывод, пропустить первые 10 и вывести следующие до 20
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Запись в БД</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
INSERT INTO joke SET
joketext = "Зачем цыпленок перешел дорогу? Чтобы попасть на другую сторону!",
jokedate = "2012-04-01"
            </pre>
            <p>Альтернативный вариант</p>
            <pre data-enlighter-language="sql">
INSERT INTO joke
(joketext, jokedate)
VALUES
("Королеве - подвески, Констанции - подвязки", "2012-04-01")
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Вывод</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
SELECT LEFT(joketxt, 20) FROM joke  - выводит текст шуток, выравнивая слева до 20 сим-в
SELECT DISTINCT authorname, authoremail FROM joke
            </pre>
            <b>DISTINCT</b> предотвращает вывод дублирующихся строк. Например, если Джоан Смит добавила на
            сайт 20 записей, то благодаря этому параметру ее имя появится в общем списке всего один раз, а не 20.
            <pre data-enlighter-language="sql">
SELECT joke.id, LEFT(joketext, 20), name, email
FROM joke INNER JOIN author
ON authorid = author.id
            </pre>
            Оператор <b>INNER JOIN</b> объединение команды <b>SELECT</b>. Он позволяет обращаться с данными из разных таблиц так, будто они хранятся в одной таблице.
        </div>
    </li>

    <li>
        <div class="collapsible-header">Счетчик ячеек</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
SELECT COUNT(id) FROM joke  - выводит кол-во id.
SELECT COUNT(id) AS ’size’ FROM joke  - выводит кол-во id но в ячейке size.
            </pre>

            <div class="collapsible-header">Среденее арифметическое</div>
            <pre data-enlighter-language="sql">
SELECT AVG(money) FROM org  - выводит среднее значение.

или

SELECT * FROM Table WHERE date BETWEEN 200703 AND 200708
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Обновление содержания ячейки</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
UPDATE joke SET jokedate = "2013-04-01" WHERE id = "1"
UPDATE joke SET jokedate = "2010-04-01" WHERE joketext LIKE "%цыпленок"

ALTER TABLE joke DROP COLUMN authorname
            </pre>
            <b>ALTER</b> редактор содержания таблици
        </div>
    </li>

    <li>
        <div class="collapsible-header">Удаление</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="sql">
DELETE FROM joke WHERE joketext LIKE "%цыпленок%"
            </pre>
        </div>
    </li>

</ul>
