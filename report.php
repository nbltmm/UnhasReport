<?php
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "unhasreport";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reports (name, email, description) VALUES ('$name', '$email', '$description')";
if ($conn->query($sql) === TRUE) {
    header("Location: thanks.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
