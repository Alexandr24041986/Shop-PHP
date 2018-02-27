<?php
namespace Alex\Shop\Controllers;
use Web\Engine\Controller;
class ContactController extends Controller
{
    private $template = 'template_view.php';
    function contactAction()
    {
        $title = 'Контакты';
        $view_filename = 'contacts.php';
       
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }
}