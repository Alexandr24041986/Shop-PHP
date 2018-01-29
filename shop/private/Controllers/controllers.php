<?php
function indexAction() {
    $title = 'Главная';
    $view_filename = 'index_view.php';
    generateResponse($view_filename, [
        'title' => $title,
       
    ]);
}

function catalogAction() {
    $title = 'Каталог';
    $view_filename = 'catalog_view.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

function registrationAction() {
    $title = 'Регистрация';
    $view_filename = 'registration_view.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

function contactsAction() {
    $title = 'Контакты';
    $view_filename = 'contacts_view.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

function personalAction() {
    $title = 'Личный кабинет';
    $view_filename = 'personal_view.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

function authAction() {
    session_start();
    include "../private/models/account_model.php";
    include "../private/models/validator_model.php";

    function auth_user(){
    $post = $_POST;
    $user_data = check_array_data(json_decode($post['auth_data'], true));
    $all_users = getAllUsers();

        foreach ($all_users as $value) {
            if ($value['login'] == $user_data['login']) {
                if ($value['pwd'] == $user_data['pwd']) {
                    $_SESSION['auth'] = true;
                    $_SESSION['login'] = $user_data['login'];

                    echo $value['state'];
                    return true;
                }
                echo 'pwd is wrong';
                return false;
            }
        }
        echo 'user not found';
        return false;
    }
}

function reg_userAction(){
    include "file_reader_model.php";
    include "validator_model.php";

    function reg_user(){
        $post = $_POST;
        $user_data = check_array_data(json_decode ($post['user_data']));
        if(!$user_data or (addDataToFile($user_data, '..private/files/users_lst.txt') === false)) {
            echo 'not add';
            return;
        } else {
            echo 'user added';
            return;
        }
        echo 'user add';
        return;
    }
        
    reg_user();
}



function generateResponse($view, $data=[]) {
        if(is_array($data)) {
            extract($data);
        }
        require_once "../private/Views/template_view.php";
    }

?>
