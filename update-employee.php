<?php
include 'database.php';
$data = array();
$id = $_GET['id'];
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['pass'] = $_POST['password'];

$sql = "UPDATE user SET name='" . $data['name'] . "',email='".$data['email']."',password='" . $data['pass'] . "' where id=$id";
if ($conn->query($sql) === TRUE) {
    echo "updated successfully";
} else {
    echo "not updated successfully";
}

//exit();
header('Location:employee_list.php');
?>