<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\Main;

class DetailController extends Controller
{
    public function show($params)
    {
        $article = (new Main)->getOneArticle($params['id']);        

        $this->title = $article['title'];
        $this->style = "detail";

        return $this->render('detail/article', [
            'title' => $article['title'],
            'date' => $article['date'],
            'announce' => $article['announce'],
            'text' => $article['content'],            
            'image' => $article['image'],
        ]);
    }
}