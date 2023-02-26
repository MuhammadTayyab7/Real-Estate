<?php
session_start();
include 'database.php';

$data = array();
// //insert data
// $email = $_POST['email'];
// $data['password'] = $_POST['password'];
// $id = $_GET['id'];
$data['pid'] = $_POST['pid'];
// echo $propertyid;
$id = $_SESSION['id'];
$sq = "update property set uid='" . $id . "' where id='".$data['pid']."'";
// $sq = "select* from user where id='$id'";
$result = $conn->query($sq);
print_r($result);

// if ($result->num_rows > 0) {

//     # code...
//     $sr_num = 1;

//     while ($row = $result->fetch_assoc()) {
//         # code...
// echo
        

       
        

        
//     }
// }



// if (mysqli_query($conn, $sq)) {
//     echo "insert successfully";
// } else {
//     echo "not insert";
// }
// header('Location:index.php');
// if (mysqli_query($conn, $sq)) {
    if($result===TRUE){
    echo "insert successfully";
} else {
    echo "not insert";
}
header('Location:index.php');

?>