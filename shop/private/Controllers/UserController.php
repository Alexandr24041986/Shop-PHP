<?php
namespace Alex\Shop\Controllers;
use Web\Engine\Controller;
class UserController extends Controller
{
    private $template = 'template_view.php';
    function userAction()
    {
        $title = 'Личный кабинет';
        $view_filename = 'user_account.php';

        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }
}
?>