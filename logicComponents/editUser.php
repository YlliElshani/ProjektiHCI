<?php

include_once 'userMapper.php';
include_once 'simpleUser.php';
if (isset($_GET['email']) && isset($_GET['id'])) {
    $userId = $_GET['id'];
    $email = $_GET['email'];
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $password = $_GET['password'];
    $ccNo = $_GET['ccNo'];
    $simpleUser = new SimpleUser($email, $name, $lastname,  $password, $ccNo, 0);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userId);
    header("Location:../views/userprofile.php");
}
