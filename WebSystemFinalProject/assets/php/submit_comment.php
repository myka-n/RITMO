<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "commentdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $comment = $conn->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New comment created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
