<? include "pagination.php"; ?>
<main class="main">
    <div class="main__row">
        <section class="main__banner banner">                    
            <div class="main__banner__background">
                <img src="<?$_SERVER['DOCUMENT_ROOT']?>/public/img/articles/<?echo $firstArticle['image'];?>" alt="lastone">
            </div>
            <div class="container">
                <div class="banner__row">
                    <h1 class="banner__title">
                        <? echo $firstArticle['title']; ?>
                    </h1>
                    <div class="banner__announce">
                        <? echo $firstArticle['announce']; ?>
                    </div>                    
                </div>
            </div>
        </section>
        <section class="main__articles articles">
            <div class="container">
                <div class="articles__title">Новости</div>
                <div class="articles__row">
                    <?php while ($article = mysqli_fetch_array($articles)) : ?>
                    <a href="/detail/<? echo $article['id']; ?>" class="articles__article article">
                        <div class="article__row">
                            <div class="article__time">
                                <? echo date('d.m.Y', strtotime($article['date'])); ?>
                            </div>
                            <div class="article__title">
                                <? echo $article['title']; ?>
                            </div>
                            <div class="article__announce">
                                <? echo $article['announce']; ?>
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
                    <?php endwhile;?>
                </div>
                <div class="articles__buttons buttons">
                    <div class="buttons__row">
                        <?php BtnPagin($page, $page_count, $btnCount);?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>