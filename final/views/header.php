<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>C$50 final: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>FINAL PROJECT</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

        <meta charset="utf-8">

    </head>

    <body style="background: #F8F8FF">

        <div class="container">
            <div id="top">
                <div>
                    <p><h1 style="color: #F08080"><b>CS50: FINAL PROJECT</b></h1></p>
                    <p><h4 style="color: #DC143C"><b><marquee>BrainBasket Foundation, Mariupol, Ukraine</marquee></b></h4></p>
                    <img alt="Background" src="/img/0034.jpg" width="100%" height="200"/>

                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="index.php">На головну</a></li>
                        <li><a href="mashup.html">Виберiть мiсто</a></li>
                        <li><a href="buy.php">Замовити тур</a></li>
                        <li><a href="history.php">Iсторiя замовлень</a></li>
                        <li><a href="change.php"><strong>Змiнити пароль</strong></a></li>
                        <li><a href="logout.php"><strong>Вийти</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
