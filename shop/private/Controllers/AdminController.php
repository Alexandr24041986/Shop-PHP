<?php
namespace Alex\Shop\Controllers;
use Web\Engine\Controller;
class AdminController extends Controller
{
private $template = 'template_view.php';
function adminAction()
{
$title = 'Личный кабинет';
$view_filename = 'admin_account.php';

return $this->generateResponse($view_filename, $this->template,
[
'title' => $title,
]);
}
}
?>