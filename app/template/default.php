<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link type="Image/x-icon" href="<?$_SERVER['DOCUMENT_ROOT']?>/public/img/icon.ico" rel="icon">
    <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/public/css/<?= $style ?>.css">
    <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/public/css/general.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__body">
                    <a href="/main" class="header__logo">
                        <img src="<?$_SERVER['DOCUMENT_ROOT']?>/public/img/logo.svg" alt="logo-vestnik">
                        <span>Галактический<br> вестник</span>
                    </a>
                    <div class="header__menu"></div>
                </div>
            </div>
        </header>
        <?= $content ?>
        <footer class="footer">
            <div class="container">
                <div class="footer__row">
                    <div class="footer__copyrights">&#169; 2023 — 2412 «Галактический вестник»</div>
                </div>
            </div>
        </footer>  
    </div>    
</body>
</html>