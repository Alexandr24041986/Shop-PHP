<?php
namespace Alex\Shop\Models;
use Web\Engine\DB;
class RegistrationModel
{
    private $db;
    private $table_name;
    const USER_ADD = 'user add';
    const USER_AUTH = 'user auth';
    const ERROR = 'error';
    function __construct()
    {
        $this->db = DB::getInstance();
        $this->table_name = 'users';
    }
    public function regUser($data)
    {
        $sql = "SELECT login FROM $this->table_name WHERE login=:login";
        if ($this->db->selectByParam($sql, ['login'=>$data['login']])) {
            return self::ERROR;
        }
        $sql = "INSERT INTO $this->table_name (login, email, pwd, user_name, state) 
VALUES (:login, :email, :pwd, :user_name, :state)";
        $param = [
            'login'=> $data['login'],
            'email'=> $data['email'],
            'pwd'=> password_hash($data['pwd'], PASSWORD_DEFAULT),
            'user_name'=> $data['user_name'],

        ];
        if (!$this->db->insertIntoTable($sql, $param)) {
            return self::ERROR;
        }
        return self::USER_ADD;
    }
    private function generateDefaultAvatar($state)
    {
        return $state;
    }
    public function authUser($data)
    {
        $sql = "SELECT login, pwd FROM $this->table_name WHERE login=:login";
        $result = $this->db->selectByParam($sql, ['login'=>$data['login']]);
        if ($result) {
            if (password_verify($data['pwd'], $result['hash'])) {
                return self::USER_AUTH;
            }
        }
        return self::ERROR;
    }
}