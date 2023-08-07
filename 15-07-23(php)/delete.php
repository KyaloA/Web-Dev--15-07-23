<?php
include 'connect.php' ;

$id = $_GET['deleteid'];
 $sql ="DELETE FROM registration WHERE userId=$id";
    $result = mysqli_query($connect,$sql);
    if($result){
        //echo "Deleted successfully";
        header("location:displayusers.php");
    }
    else{
        echo "Not Successful";
    }

?>