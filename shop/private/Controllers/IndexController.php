<?php
namespace Alex\Shop\Controllers;

//use Web\Concert\Models\ShowsModel;
use Web\Engine\Controller;

class IndexController extends Controller
{
    private $template = 'template_view.php';
    
   

    function indexAction()
    {
        $title = 'Главная';
        $view_filename = 'index_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}