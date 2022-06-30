<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ? : 'Наш фреймворк' ?></title>

    <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/project/webroot/css/style.min.css">
</head>
<body>
<header>
    <? require_once $_SERVER['DOCUMENT_ROOT'] . '/project/templates/default/header.php' ?>
</header>
<div class="container">
<!--    <aside class="sidebar left">-->
<!--        левый сайдбар-->
<!--    </aside>-->
    <main>
        <?= $content ?>
    </main>
<!--    <aside class="sidebar right">-->
<!--        правый сайдбар-->
<!--    </aside>-->
</div>
<footer>
    футер сайта
</footer>
<script src="<?$_SERVER['DOCUMENT_ROOT']?>/vendor/jquery-1.8.2.min.js"></script>
<script src="<?$_SERVER['DOCUMENT_ROOT']?>/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
