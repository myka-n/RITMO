<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "commentdb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, comment FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>";
    
        // Display the name if it is not empty
        if (!empty($row["name"])) {
            echo "<strong>" . $row["name"] . "</strong>: ";
        }
    
        echo $row["comment"] . "</p>";
    }
} else {
    echo "No comments yet!";
}

$conn->close();
?>
