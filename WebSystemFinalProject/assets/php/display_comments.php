<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "comment_db.comments"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, comment FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["name"]. "</strong>: " . $row["comment"]. "</p>";
    }
} else {
    echo "No comments yet!";
}

$conn->close();
?>
