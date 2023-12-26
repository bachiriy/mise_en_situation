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

    public function getUserById($UserId)
    {
        global $db;
        $sql = "SELECT * FROM users WHERE users_id = ?";
        $stmt = $db->prepare($sql);

        $stmt->bind_param('i', $UserId);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        $stmt->close();
        return $user;
    }
}


$NewUser = User::NewUser('hafsaa','jdfkj', 'jkkdjfd');
dd($NewUser);

$DisplayUser = new User(3);
$Test = $DisplayUser->getUserById(3);
dd($DisplayUser)

?>