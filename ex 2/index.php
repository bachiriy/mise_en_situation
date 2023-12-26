<?php
class User
{
    public $id;
    public $username;
    public $email;
    private $password;


    static function NewUser($username, $email, $password){
        global  $db;

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = ("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')");

        return $db->query($query);
}

}


$NewUser = User::NewUser('hafsaa','jdfkj', 'jkkdjfd');
dd($NewUser);


?>