<?php

class UsersController {



    public function login() {

        $authAdmin = false;
        
        if($_POST['username'] || $_POST['password']) {
            $authAdmin = User::login($_POST['username'],$_POST['password']);
            $tasks = Task::all();
            require_once('views/tasks/index.php');

        }
        else {
            require_once('views/users/login.php');
        }


    }


}