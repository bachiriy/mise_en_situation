<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_errno) {
    die("Error connecting to the database: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO form (username, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $name, $email);
        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
} else {
  
}

$conn->close();
?>
