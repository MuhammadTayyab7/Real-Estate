<?php
include 'database.php';


//exit();
$data = array();
//insert data
$data['name'] = $_POST['name'];
$data['email'] = $_POST['email'];
$data['password'] = $_POST['password'];

$data['profile_pic'] = $_POST['files'];


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
            $uploaddir = 'uploads' . '/' . 'profile_pics';
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
$data['profile_pic'] = $uploadfile;
$sql = "insert into user(name,email,password,profile_pic) values ('" . $data['name'] . "','" . $data['email'] . "','" . $data['password'] . "','"  . $data['profile_pic'] . "' ) ";


if (mysqli_query($conn, $sql)) {
    echo "insert successfully";
} else {
    echo "not insert";
}
header('Location:employee_list.php');
?>