<?php
include "connect.php";
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];

//$SERVER
if($_SERVER['REQUEST_METHOD']=="POST"){//checks if user has submitted form
    $username = $_POST['username'];
    $month = $_POST['regMonth'];
    $sql ="UPDATE registration SET userName='$username',regMonth='$month' WHERE userId=$id";
    $result = mysqli_query($connect,$sql);
    if ($result){
        echo "Updated successfully";
        //header("location:displayusers.php");
    }else{
        echo "not registered";
        
    }
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <?php
        $months = array("January","February","March","April", "May")
        ?>
    <h1>Update User Details</h1>
    <form action="update.php" method="post"> <!--action opens new php, method can be post or get-->
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter username">
        <label>Registration Month</label>
        <select name="regMonth">
            <option>--Select Month--</option>
            <?php
            foreach($months as $month){ 
                echo "<option>$month</option>";
            }
            ?>
        </select>
        <input type="submit" name="update">
    </form>
    </body>
</html>