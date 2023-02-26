<?php
include 'database.php';
$data = array();
$data['email'] = $_POST['email'];

$data['password'] = $_POST['password'];

$sql = "INSERT into user(email,password) VALUES ('". $data['email'] . "','" . $data['password'] . "')";
if (mysqli_query($conn, $sql)) {
    echo "insert successfully";
} else {
    echo "not insert";
}
header('Location:u-login.php');
?>