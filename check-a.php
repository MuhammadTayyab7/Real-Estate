<?php

include 'database.php';
$data = array();
$email = $_POST['email'];
$pass = $_POST['password'];
g

$sq = " select * from admin where email= '$email' AND password= '$pass'";

$result = $conn->query($sq);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data['email'] = $row['email'];
        $data['password'] = $row['password'];

    }
    # code...

    $data['found'] = 1;
} else {
    # code...
    $data['found'] = 0;
}

if ($data['found'] == 1) {

    session_start();
    $_SESSION['admin_email'] = $data['email'];
    $_SESSION['admin_pass'] = $data['password'];
}
echo json_encode($data);
exit();



?>