<?php
include 'database.php';
$data = array();
$id = $_GET['id'];
$data['name'] = $_POST['name'];
$data['bedroom'] = $_POST['bedroom'];
$data['bathroom'] = $_POST['bathroom'];
$data['price'] = $_POST['price'];
$data['area'] = $_POST['area'];
$data['address'] = $_POST['address'];
$data['city'] = $_POST['city'];

$sql = "UPDATE property SET name='" . $data['name'] . "',bedroom='".$data['bedroom']."',bathroom='" . $data['bathroom'] . "',price='".$data['price']."',area='" .$data['area']."',address='" .$data['address']."' ,city='" .$data['city']."' where id=$id";
if ($conn->query($sql) === TRUE) {
    echo "updated successfully";
} else {
    echo "not updated successfully";
}

//exit();
header('Location:property_list.php');
?>