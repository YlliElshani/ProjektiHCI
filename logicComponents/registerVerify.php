<?php

include_once 'simpleUser.php';
require_once 'userMapper.php';

session_start();

if(isset($_POST['register-btn'])){
    $register= new RegisterLogic($_POST);
    $register->insertData();
}
else{
    header("Location:../views/signup.php");
}

class RegisterLogic{

    private $name="";
    private $lastname="";
    private $email="";
    private $password="";
    private $ccNo ="";

    function __construct($formData){
        $this->name=$formData['register-name'];
        $this->lastname= $formData['register-lastname'];
        $this->email= $formData['register-email'];
        $this->password=$formData['register-pass'];
        $this->ccNo=$formData['register-ccNo'];
    }

    public function insertData(){
        $user = new SimpleUser($this->name, $this->lastname, $this->email, $this->password, $this->ccNo, 0);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../views/login.php");
    }
}
