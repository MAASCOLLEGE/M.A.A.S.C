<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "college_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$category = $_POST['category'];
$name = $_POST['name'];
$initial = $_POST['initial'];
$community = $_POST['community'];
$dob = $_POST['dob'];
$country_code = $_POST['country_code'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$sql = "INSERT INTO admissions (category, name, initial, community, dob, country_code, mobile, email)
        VALUES ('$category', '$name', '$initial', '$community', '$dob', '$country_code', '$mobile', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
