<?php

include 'database.php';
$id=$_GET['id'];
echo $id;
$sql="DELETE FROM property WHERE id=$id";
if($conn->query($sql)===TRUE){
     echo "Delete successfully";
 }else{
     echo "not deleted successfully"; 
 }
header("Location:property_list.php");




?>