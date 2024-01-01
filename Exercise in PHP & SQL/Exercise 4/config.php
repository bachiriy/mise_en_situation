<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = "test";


$conn = new mysqli($server, $username, $password, $database);
if($conn->connect_errno){
    die ("error a zin" . $conn->connect_errno);
}

$name = $_POST['username'];
$email = $_POST['email'];

$sql = "INSERT INTO form (username, email) VALUES('$name', '$email')";
        if($conn->query($sql) === TRUE){
        echo json_encode(['sucess' => true]);
}else{
        echo json_encode(['sucess' => false , 'error' => $conn->error]);
    }

$conn->close();
?>