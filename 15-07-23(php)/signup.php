<?php
include "connect.php";
//$SERVER
if($_SERVER['REQUEST_METHOD']=="POST"){//checks if user has submitted form
    $username = $_POST['username'];
    $month = $_POST['regMonth'];
    $sql ="INSERT INTO registration(userName,regMonth) VALUES('$username','$month')";
    $result = mysqli_query($connect,$sql);
    if ($result){
        //echo "Registered successfully";
        header("location:displayusers.php");
    }else{
        echo "not registered";
        
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
        <?php
        $months = array("January","February","March","April", "May")
        ?>
    <h1>Registration</h1>
    <form action="signup.php" method="post"> <!--action opens new php, method can be post or get-->
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
        <input type="submit" name="submit">
    </form>
    </body>
</html>