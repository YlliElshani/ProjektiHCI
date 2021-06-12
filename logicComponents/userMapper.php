<?php
require_once "databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function insertUser(\SimpleUser $user){
        $query = "insert into user (name, lastname, email, password, ccNo, role) values (:name,:lastname, :email, :password, :ccNo, :role)";
        $statement = $this->conn->prepare($query);
        
        $name = $user->getName();
        $lastname = $user->getLastName();
        $email = $user->getEmail();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $ccNo = $user->getCcNo();
        $role = $user->getRole();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $pass);
        $statement->bindParam(":ccNo", $ccNo);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($userId){
        $this->query = "delete from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

    public function edit(\SimpleUser $user, $id){
        $this->query = "update user set name=:name, lastname=:lastname, email=:email, password=:password, ccNo=:ccNo where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $name = $user->getName();
        $lastname = $user->getLastName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $ccNo = $user->getCcNo();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":ccNo", $ccNo);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function getUserByID($userId){
        $this->query = "select * from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserByEmail($email){
        $this->query = "select * from user where email=:email";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}