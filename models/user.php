<?php

class User {


    public $username;
    public $password;

    public function __construct($id, $username, $password) {

        $this->username  = $username;
        $this->password = $password;
    }


    public static function login($username,$password) {
        $db = Db::getInstance();
        
        $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');

        $req->execute(array('username' => $username, 'password' => $password));
        $user = $req->fetch();

        if($user) return true;
        else return false;


    }
}