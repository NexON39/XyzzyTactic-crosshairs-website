<?php
    require_once 'autoloader/autoload.php';
    $crosshairs = new crosshairs;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XyzzyTactic</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="fa/css/all.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div class="top_btn">
        <a href="#main"><i class="fa-solid fa-arrow-up-long"></i></a>
    </div>
    <div class="main" id="main">
        <!-- nav -->
        <div class="navbar flex" id="navbar">
            <div class="logo"><img src="img/logo.png" alt=""></div>
            <nav class="nav">
                <ul class="flex menu">
                    <li><a href="#main">Strona główna</a></li>
                    <li><a href="#crosshairs">Celowniki</a></li>
                    <li><a href="#">Efekty</a></li>
                    <li><a href="https://xyzzytactic.mtasa.eu" target="_blank">Sklep premium</a></li>
                </ul>
            </nav>
            <div class="menu-mobile">
                <ul>
                    <li><a href="#main">Strona główna</a></li>
                    <li><a href="#crosshairs">Celowniki</a></li>
                    <li><a href="#">Efekty</a></li>
                    <li><a href="https://xyzzytactic.mtasa.eu" target="_blank">Sklep premium</a></li>
                </ul>
            </div>
            <div class="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="home-content">
            <div class="container flex">
                <h1><span>X</span>yzzy<span>T</span>actic<span>.</span></h1>
                <p>Dołącz do naszego serwera oraz centrum społeczności na serwerze discord</p>
                <div class="home_btns flex">
                    <a href="https://discord.gg/pYFrJZuSTb" target="_blank"><div class="dsc_btn btn">Discord</div></a>
                    <a href="mtasa://51.75.35.123:20972"><div class="mta_btn btn">MTA</div></a>
                </div>
            </div>
            <div class="container flex">
                <p>Posiadamy największą bazę celowników oraz efektów do MTA:SA</p>
                <a href="#crosshairs"><div class="choose_btn btn">Wybierz swój!</div></a>
            </div>
        </div>
    </div>
    <!-- Crosshairs -->
    <div class="crosshairs" id="crosshairs">
        <div class="text-header">
            <h1>Celowniki</h1>
        </div>
        <div class="cards">
            <?php
                $crosshairs->showCrosshairs();
            ?>
        </div>
    </div>

    <footer class="footer">
        <p>Made by <a href="https://kscode.pl" target="_blank" style="color: var(--scroll);">KSCODE.PL</a> 	&copy; 2022</p>
    </footer>
</body>

    <script src="js/navbar.js"></script>

</html>