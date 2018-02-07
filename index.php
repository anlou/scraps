<!doctype html>
<html lang="en">
<head>
    <link id="favicon" rel="icon" type="image/png" sizes="64x64" href="/img/messenger_blue.icon">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--syntaxhighlighter JS-->
    <script src="js/syntaxhighlighter/src/shCore.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushXml.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushCss.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushPhp.js"></script>
    <script src="js/syntaxhighlighter/scripts/shBrushSql.js"></script>
    <script>SyntaxHighlighter.all();</script>
    <script>
        $(document).ready(function () {
            $('ul.tabs').tabs();
            $('.collapsible').collapsible();
        });
    </script>
    <!--Materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--syntaxhighlighter css-->
    <link rel="stylesheet" href="js/syntaxhighlighter/styles/shCore.css">
    <link rel="stylesheet" href="js/syntaxhighlighter/styles/shThemeDefault.css">

    <!--STYLE-->
    <style>
        body {
            background-image: url("img/bg.jpg");
            font-family: GillSans, Calibri, Trebuchet, sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #607d8b;
            margin-top: 40px;
        }

        b {
            color: #069;
        }

        div.card-panel {
            width: 100%;
            font-size: 16px;
        }

        div .col active {
            width: 100%;
        }

        .wrapper {
            width: 85%;
            margin: auto;
        }

        ul.tabs {
            background: none;
        }

        .collapsible-header:not(".active") {
            width: 250%;
        }

        .collapsible-header, .collapsible-body, #html, #css, #php, #jq, #js, #ajax, #curl, #twig, #mysql, #push {
            width: 100%;
        }
    </style>

    <title>Записки программиста</title>
</head>
<body>

<div class="wrapper">
    <div class="row">
        <div class="cols">
            <ul class="tabs">
                <li class="tab"><a href="#html" class="active">HTML</a></li>
                <li class="tab"><a href="#css">CSS</a></li>
                <li class="tab"><a href="#php">PHP</a></li>
                <li class="tab"><a href="#mysql">MySQL</a></li>
                <li class="tab"><a href="#js">JS</a></li>
                <li class="tab"><a href="#jq">jQuary</a></li>
                <li class="tab"><a href="#curl">cURL</a></li>
                <li class="tab"><a href="#twig">TWIG</a></li>
                <li class="tab"><a href="#push">Web PUSH</a></li>
                <li class="tab"><a href="#push">git</a></li>
            </ul>
        </div>

        <div id="html" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/html.php"?>
        </div>

        <div id="css" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/css.php"?>
        </div>

        <div id="php" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/php.php"?>
        </div>

        <div id="mysql" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/mysql.php"?>
        </div>

        <div id="js" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/js.php"?>
        </div>

        <div id="jq" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/jq.php"?>
        </div>

        <div id="curl" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/curl.php"?>
        </div>

        <div id="twig" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/twig.php"?>
        </div>

        <div id="push" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/push.php"?>
        </div>

        <div id="push" class="col">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/base/git.php"?>
        </div>

    </div>

</body>

</html>