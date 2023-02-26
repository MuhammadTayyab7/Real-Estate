<?php
 include 'database.php';
$data = array();
$name = $_POST['name'];
$sql = "select * from property where name='$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
    }
  $data['found']=1;  
} else {
    $data['found']=0;
}
echo json_encode($data);
exit();
?>