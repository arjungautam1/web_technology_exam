<?php
$mysqli = new mysqli("localhost", "root", "", "php");

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

//Fetch Data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
}

// Attempt insert query execution
$sql = "INSERT INTO users (first_name, last_name, email,country,gender) VALUES ('$first_name', '$last_name', '$email','$country','$gender')";
if ($mysqli->query($sql) === true) {
    echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
