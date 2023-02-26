<?php
include 'database.php';


//exit();
$data = array();
//insert data
$data['name'] = $_POST['name'];
$data['bedroom'] = $_POST['bedroom'];
$data['bathroom'] = $_POST['bathroom'];
$data['area'] = $_POST['area'];
$data['address'] = $_POST['address'];
$data['city'] = $_POST['city'];
$data['price'] = $_POST['price'];


$data['property_pic'] = $_POST['files'];


if ($_FILES['files']['error'] > 0) {

} else {
    if ((($_FILES["files"]["type"] == "image/gif") || ($_FILES["files"]["type"] == "image/jpeg") || ($_FILES["files"]["type"] == "image/jpg") || ($_FILES["files"]["type"] == "image/pjpeg") || ($_FILES["files"]["type"] == "image/x-png") || ($_FILES["files"]["type"] == "image/png"))) {

        if ($_FILES["files"]["size"] <= 1024 * 1024 * 5 * 7) {
            //string or folder name=uploads
            $uploaddir = 'uploads';
            if (!is_dir($uploaddir)) {

                mkdir($uploaddir, 0777);
            }

            $uploaddir = 'uploads' . '/' ;
            if (!is_dir($uploaddir)) {
                mkdir($uploaddir, 0777);

            }
            $uploaddir = 'uploads' . '/' . 'properties';
            if (!is_dir($uploaddir)) {
                mkdir($uploaddir, 0777);
            }
            $number = rand(0, 99999999999999);

            $uploadfile = $uploaddir . '/' . $number . basename($_FILES['files']['name']);

            if (move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile)) {
             
            } else {
                echo "some error try again later";
            }
        } else {
            echo "Size is big";
        }
    } else {
        echo "Formate is not supported";
    }
}
$data['property_pic'] = $uploadfile;
$sql = "insert into property(name,city,bedroom,bathroom,area,address,property_pic,price) values ('" . $data['name'] . "','" . $data['city'] . "','" . $data['bedroom'] . "','"  . $data['bathroom'] . "','"  . $data['area'] ."','"  . $data['address'] ."','"  . $data['property_pic'] ."','"  . $data['price'] ."' ) ";


if (mysqli_query($conn, $sql)) {
    echo "insert successfully";
} else {
    echo "not insert";
}
header('Location:property_list.php');
?>