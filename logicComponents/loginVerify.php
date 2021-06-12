<?php

include_once 'simpleUser.php';
require_once 'userMapper.php';

session_start();

if(isset($_POST['login-btn'])){
    $login = new Login($_POST); 
    $login->verifyData();
}
else{
    header("Location:../views/LogIn.php");
}

class Login{

    private $email="";
    private $password="";

    public function __construct($formData){
        $this->email=$formData['email'];
        $this->password= $formData['password'];
    }


    public function verifyData(){
        if($this->variablesNotDefinedWell($this->email, $this->password)){
            header("Location:../views/login.php");
        }
        else if ($this->usernameAndPasswordCorrect($this->email, $this->password)){
            header("Location:../views/userprofile.php");
        }
        else{
            header("Location:../views/login.php");
        }
    }

    private function variablesNotDefinedWell($email, $password){
        if(empty($email) || empty($password)){
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($email, $password){
        $mapper = new UserMapper();
        $user = $mapper->getUserByEmail($email);

        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['password'])){
            if ($user['role'] == 0) {
                $obj = new SimpleUser($user['userid'], $user['name'], $user['password'], $user['lastname'], $user['email'], $user['ccNo']);
                $obj->setSession();
            }
            return true;
        }
        else{
            return false;
        }
    }
}


