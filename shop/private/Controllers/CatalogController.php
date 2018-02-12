<?php
namespace Alex\Shop\Controllers;
use Web\Engine\Controller;
class CatalogController extends Controller
{
    private $template = 'template_view.php';
    function catalogAction()
    {
        $title = 'Каталог';
        $view_filename = 'catalog_view.php';
       
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }
}