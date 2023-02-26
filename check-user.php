<?php
 session_start();

include 'database.php';
$data = array();
$email = $_POST['email'];
$pass = $_POST['password'];



$sq = " select * from user where email= '$email' AND password= '$pass'";

$result = $conn->query($sq);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data['email'] = $row['email'];
        $data['password'] = $row['password'];
        $data['id'] = $row['id'];

    }
    # code...

    $data['found'] = 1;
} else {
    # code...
    $data['found'] = 0;
}

if ($data['found'] == 1) {

   
    $_SESSION['user_email'] = $data['email'];
    $_SESSION['user_pass'] = $data['password'];
    $_SESSION['id'] = $data['id'];

}
echo json_encode($data);
exit();



?>