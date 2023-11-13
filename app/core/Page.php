<?php
namespace App\Core;

class Page
{
    private $layout;    
    private $title;
    private $view;
    private $data;
    private $style;

    public function __construct($layout, $title = "", $view = null, $data = [], $style = "")
    {
        $this->layout = $layout;
        $this->title = $title;
        $this->view = $view;
        $this->data = $data;
        $this->style = $style;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}