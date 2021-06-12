<?php

class SimpleUser{
    private $email;
    private $name;
    private $lastname;
    private $password;
    private $ccNo;
    private $role;

    public function __construct($name, $lastname,$email, $password, $ccNo, $role){
        $this->password = $password; 
        $this->email = $email;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->ccNo = $ccNo;
        $this->role = $role;
    }


    public function setSession(){
        $_SESSION['role'] = 0;
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie(){
        setcookie("username", $this->getName(), time() + 2 * 24 * 60 * 60);
    }

    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastname;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCcNo(){
        return $this->ccNo;
    }

    public function getRole(){
        return $this->role;
    }

}
