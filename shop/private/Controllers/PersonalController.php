<?php
namespace Alex\Shop\Controllers;
use Web\Engine\Controller;
class PersonalController extends Controller
{
    private $template = 'template_view.php';
    function personalAction()
    {
        $title = 'Личный кабинет';
        $view_filename = 'personal_view.php';
       
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }
}