<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['first_name']);
$email   = $conn->real_escape_string($_POST['last_name']);
$subj    = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$gender    = $conn->real_escape_string($_POST['gender']);
$country   = $conn->real_escape_string($_POST['country']);
$position    = $conn->real_escape_string($_POST['position']);
$city = $conn->real_escape_string($_POST['city']);
$address    = $conn->real_escape_string($_POST['address']);
$message   = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into prayerrequest (first_name,last_name,email,phone,gender,country,position,city,address,message) 
VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $phone . "','" . $gender . "','" . $country . "','" . $position . "','" . $city . "','" . $address . "','" . $message . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For Contacting Us <br>";

$conn->close();

?>