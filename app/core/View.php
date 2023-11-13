<?php
namespace App\Core;

class View
{
    public function render(Page $page)
	{
		return $this->renderLayout($page, $this->renderView($page));
	}

	private function renderLayout(Page $page, $content) 
	{
		$layoutPath = $_SERVER['DOCUMENT_ROOT'] . "/app/template/{$page->layout}.php";
		
		if (file_exists($layoutPath)) {
			ob_start();
				$title = $page->title;
				$style = $page->style;
				include $layoutPath;
			return ob_get_clean();
		}
	}
	private function renderView(Page $page) 
	{
		$viewPath = $_SERVER['DOCUMENT_ROOT'] . "/app/views/{$page->view}.php";

		if (file_exists($viewPath)) {
			ob_start();
				$data = $page->data;
				extract($data);
				include $viewPath;
			return ob_get_clean();
		}
	}
}