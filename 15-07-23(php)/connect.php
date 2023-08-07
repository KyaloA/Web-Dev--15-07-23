<?php
    //connection to db server
    $server = 'localhost';
    $user = 'root';
    $password ='';
    $db = 'classwebdev';

    $connect = mysqli_connect($server,$user,$password,$db);

    if(!$connect){
        die(mysqli_error($connect));
    } 

   /* $sql = "CREATE DATABASE classWebDev";
    $result = mysqli_query($connect,$sql);
    if($result){
        echo "Database created successfully";
    } else{
        die(mysqli_error($connect));
    }
    */
?>