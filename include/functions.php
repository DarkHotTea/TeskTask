<?php
require "connect.php";

function head()
{
?>
    <header class="header">
        <div class="container">
            <div class="header__body">
                <a href="<? $_SERVER['DOCUMENT_ROOT'] ?>/index.php" class="header__logo">
                    <img src="<? $_SERVER['DOCUMENT_ROOT'] ?>/img/logo.svg" alt="logo-vestnik">
                    <span>Галактический<br> вестник</span>
                </a>
                <div class="header__menu">

                </div>
            </div>
        </div>
    </header>
<?php
}

function footer()
{
?>
    <footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__copyrights">
                    &#169; 2023 — 2412 «Галактический вестник»
                </div>
            </div>
        </div>
    </footer>
<?php
}

function BtnRight($page, $page_count)
{
?>
    <a href="?page=<?php $page + 2 < $page_count ? print_r($page + 2) : print_r($page_count);?>" class="buttons__button buttons__button-right">
        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 10C2.44772 10 2 10.4477 2 11C2 11.5523 2.44772 12 3 12L3 10ZM18.466 11.7071C18.8565 11.3166 18.8565 10.6834 18.466 10.2929L12.102 3.92893C11.7115 3.53841 11.0783 3.53841 10.6878 3.92893C10.2973 4.31946 10.2973 4.95262 10.6878 5.34315L16.3447 11L10.6878 16.6569C10.2973 17.0474 10.2973 17.6805 10.6878 18.0711C11.0783 18.4616 11.7115 18.4616 12.102 18.0711L18.466 11.7071ZM3 12L17.7589 12L17.7589 10L3 10L3 12Z" fill="#841844" />
        </svg>
    </a>
<?
}

function BtnLeft($page)
{
?>
    <a href="?page=<?php $page - 2 > 1 ? print_r($page - 2) : print_r(1);?>" class="buttons__button buttons__button-left">
        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 10C2.44772 10 2 10.4477 2 11C2 11.5523 2.44772 12 3 12L3 10ZM18.466 11.7071C18.8565 11.3166 18.8565 10.6834 18.466 10.2929L12.102 3.92893C11.7115 3.53841 11.0783 3.53841 10.6878 3.92893C10.2973 4.31946 10.2973 4.95262 10.6878 5.34315L16.3447 11L10.6878 16.6569C10.2973 17.0474 10.2973 17.6805 10.6878 18.0711C11.0783 18.4616 11.7115 18.4616 12.102 18.0711L18.466 11.7071ZM3 12L17.7589 12L17.7589 10L3 10L3 12Z" fill="#841844" />
        </svg>
    </a>
    <?
}

function BtnPagin($page, $page_count, $limit)
{

    if ($page < 2) : ?>

        <? foreach (range(1, $limit) as $p) : ?>
            
            <? if ($p == $page) : ?>
            
            <a href="?page=<?php echo $p; ?>" class="buttons__button current"><? echo $p; ?></a>
            
            <? else: ?>
            
            <a href="?page=<?php echo $p; ?>" class="buttons__button"><? echo $p; ?></a>

            <? endif; ?>

        <? endforeach; ?>

        <? BtnRight($page, $page_count); ?>

    <? endif; ?>
                
    <? if ($page >= 2 && $page <= $page_count - 1) : ?>

        <? BtnLeft($page); ?>

        <? foreach (range($page - 1, $page + 1) as $p) : ?>
            
            <? if ($p == $page) : ?>
            
            <a href="?page=<?php echo $p; ?>" class="buttons__button current"><? echo $p; ?></a>
            
            <? else: ?>
            
            <a href="?page=<?php echo $p; ?>" class="buttons__button"><? echo $p; ?></a>

            <? endif; ?>

        <? endforeach; ?>

        <? BtnRight($page, $page_count); ?>

    <? endif; ?>

    <? if ($page > $page_count - 1) : ?>

        <? BtnLeft($page); ?>

        <? foreach (range($page_count - 2, $page_count) as $p) : ?>

            <? if ($p == $page) : ?>

            <a href="?page=<?php echo $p; ?>" class="buttons__button current"><? echo $p; ?></a>

            <? else: ?>
            
            <a href="?page=<?php echo $p; ?>" class="buttons__button"><? echo $p; ?></a>

            <? endif; ?>

        <? endforeach; ?>

    <? endif;
}
