<?php

$userName = $_POST["user_name"];
$passWord = $_POST["password"];

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "stringeedemo";

$conn = new mysqli($server, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("select * from users where username = '$userName'");

// $stmt->bind_param("s", $userName);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $rows = $result->fetch_assoc();

    if ($rows['password'] === $passWord) {
        header("Location: http://localhost/login_bassic/admin.php");
        exit();
    } else {
        echo "Login failed";
    }
} else {
    echo "Login failed";
}


$stmt->close();
$conn->close();
