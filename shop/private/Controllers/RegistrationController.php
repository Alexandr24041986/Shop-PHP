<?php
    namespace Alex\Shop\Controllers;
    use Alex\Shop\Models\RegistrationModel;
    use Web\Engine\Controller;

    class RegistrationController extends Controller
    {
        private $template = 'template_view.php';
        private $model;

        function __construct() {
            $this->model = new RegistrationModel();
        }

        function registrationAction()
        {
            if (isset($_POST['user_data'])) {
                //запись в базу
                
                return $this->generateAjaxRespons($this->model->regUser(json_decode($_POST['user_data'], true)));
            } else {
                $title = 'Регистрация';
                $view_filename = 'registration.php';
           
                return $this->generateResponse($view_filename, $this->template,
                [
                    'title' => $title,
                ]);
            }
           
        }

    }
?>