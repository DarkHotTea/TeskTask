<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\Main;

class MainController extends Controller
{
    public function index($params)
    {
        $page = isset($params['id']) ? $params['id'] : 1;
        $newsPerPage = 4;
        $this_page_first_result = ($page - 1) * $newsPerPage;
        $btnCount = 3;

        $countArticles = (new Main)->getCountArticles();
        $articles = (new Main)->getAnotherArticles($newsPerPage, $this_page_first_result);        
        $firstArticle = (new Main)->getLastArticle();
        
        $page_count = ceil($countArticles / $newsPerPage);
        
        $this->title = "Главная";
        $this->style = "main";

        return $this->render('main/articles', [
            'firstArticle' => $firstArticle,
            'articles' => $articles,
            'countArticles' => $countArticles,
            'page' => $page,
            'page_count' => $page_count,
            'btnCount' => $btnCount,
        ]);
    }
}