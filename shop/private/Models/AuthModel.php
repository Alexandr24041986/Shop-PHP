<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 26.02.2018
 * Time: 16:43
 */

namespace Alex\Shop\Models;
use Web\Engine\DB;
class AuthModel {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance();
    }

    function authUser($user_data) {
        session_start();

        $user = $this->db->getAccount($user_data['login']);

        if ($user['login'] == $user_data['login']) {
            if (password_verify($user_data['pwd'], $user['pwd'])) {
                $_SESSION['auth'] = $user['state'];
                $_SESSION['login'] = $user['login'];
                return $user['state'];
            }

            return 'pwd is wrong';
        }

        return 'user not found';
    }
}
?>