<?php
namespace App\Models;
use App\Core\Model;

class Main extends Model
{

    public function getLastArticle()
    {
        return mysqli_fetch_array(mysqli_query(self::$link, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 1"));
    }

    public function getCountArticles()
    {
        return mysqli_fetch_array(mysqli_query(self::$link, "SELECT COUNT(*) FROM `news`"))["COUNT(*)"];
    }

    public function getAnotherArticles($articleCount, $start) 
    {
        return mysqli_query(self::$link, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT $articleCount OFFSET $start");
    }

    public function getOneArticle($id) {
        return mysqli_fetch_array(mysqli_query(self::$link, "SELECT * FROM `news` WHERE `id` = $id"));
    }
}