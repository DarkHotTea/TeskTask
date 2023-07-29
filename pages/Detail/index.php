<?php
require $_SERVER['DOCUMENT_ROOT'] . "/include/functions.php";

$article = R::findOne('news', 'id = ?', array($_GET['id']));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $article->title; ?></title>
    <link type="Image/x-icon" href="/img/icon.ico" rel="icon">
    <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/css/general.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php
        head();
        ?>
        <main class="main">
            <div class="container">
                <div class="main__navigation">
                    <a href="<? $_SERVER['DOCUMENT_ROOT'] ?>/index.php">Главная</a> / <span><? echo $article->title; ?></span>
                </div>
                <h1 class="main__title"><? echo $article->title; ?></h1>
                <article class="main__article article">
                    <div class="article__row">
                        <div class="article__content">
                            <div class="article__time">
                                <? echo date('d.m.Y', strtotime($article->date)); ?>
                            </div>
                            <h2 class="article__title">
                                <? echo $article->announce; ?>
                            </h2>
                            <div class="article__text">
                                <? echo $article->content; ?>
                            </div>
                            <a href="<? $_SERVER['DOCUMENT_ROOT'] ?>/index.php" class="article__button">
                                <div class="article__button-arrow">
                                    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM26.707 8.70711C27.0975 8.31658 27.0975 7.68342 26.707 7.2929L20.343 0.928934C19.9525 0.538409 19.3193 0.538409 18.9288 0.928934C18.5383 1.31946 18.5383 1.95262 18.9288 2.34315L24.5857 8L18.9288 13.6569C18.5383 14.0474 18.5383 14.6805 18.9288 15.0711C19.3193 15.4616 19.9525 15.4616 20.343 15.0711L26.707 8.70711ZM1 9L25.9999 9L25.9999 7L1 7L1 9Z" fill="#841844" />
                                    </svg>
                                </div>
                                <div class="article__button-text">назад к новостям</div>
                            </a>
                        </div>
                        <div class="article__img">
                            <img src="<? $_SERVER['DOCUMENT_ROOT'] ?>/img/articles/<? echo $article->image; ?>" alt="Новостная картинка">
                        </div>
                    </div>
                </article>
            </div>
        </main>
        <?php
        footer();
        ?>
    </div>
</body>

</html>