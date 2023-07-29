<?php

include "include/functions.php";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$newsPerPage = 4;
$this_page_first_result = ($page - 1) * $newsPerPage;
$btnCount = 3;

$db_news = R::findAll('news');
$result = R::findAll('news', "ORDER BY `date` DESC LIMIT $newsPerPage OFFSET $this_page_first_result");

$LastOne = R::findOne('news', "ORDER BY `date` DESC");
$page_count = ceil(count($db_news) / $newsPerPage);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link type="Image/x-icon" href="/img/icon.ico" rel="icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/general.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .main__banner {
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.35))), url("../img/articles/<?echo $LastOne->image;?>") 55% 45%/130% auto no-repeat;
            background: linear-gradient(rgba(0, 0, 0, 0.35)), url("../img/articles/<?echo $LastOne->image;?>") 55% 45%/130% auto no-repeat;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php
        head();
        ?>
        <main class="main">
            <div class="main__row">
                <section class="main__banner banner">                    
                    <div class="container">
                        <div class="banner__row">
                            <h1 class="banner__title">
                                <? echo $LastOne->title; ?>
                            </h1>
                            <div class="banner__announce">
                                <? echo $LastOne->announce; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main__articles articles">
                    <div class="container">
                        <div class="articles__title">
                            Новости
                        </div>
                        <div class="articles__row">
                            <?php foreach ($result as $article) :?>
                            <a href="/pages/Detail/index.php?id=<? echo $article->id; ?>" class="articles__article article">
                                <div class="article__row">
                                    <div class="article__time">
                                        <? echo date('d.m.Y', strtotime($article->date)); ?>
                                    </div>
                                    <div class="article__title">
                                        <? echo $article->title; ?>
                                    </div>
                                    <div class="article__announce">
                                        <? echo $article->announce; ?>
                                    </div>
                                    <div class="article__button">
                                        <div class="article__button-text">Подробнее</div>
                                        <div class="article__button-arrow">
                                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM26.707 8.70711C27.0975 8.31658 27.0975 7.68342 26.707 7.2929L20.343 0.928934C19.9525 0.538409 19.3193 0.538409 18.9288 0.928934C18.5383 1.31946 18.5383 1.95262 18.9288 2.34315L24.5857 8L18.9288 13.6569C18.5383 14.0474 18.5383 14.6805 18.9288 15.0711C19.3193 15.4616 19.9525 15.4616 20.343 15.0711L26.707 8.70711ZM1 9L25.9999 9L25.9999 7L1 7L1 9Z" fill="#841844" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach;?>
                        </div>
                        <div class="articles__buttons buttons">
                            <div class="buttons__row">
                                <?php
                                BtnPagin($page, $page_count, $btnCount);
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php
        footer();
        ?>
    </div>
</body>

</html>