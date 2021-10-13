<?php
    $usertype=$_POST['usertype'];
    $name=$_POST['name'];
    $phoneno=$_POST['phoneno'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $connection= new mysqli_connect("localhost","root","","finalproject");
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
        }else{
        $sql="INSERT INTO regis(usertype,name,phoneno,emailid,password) VALUE ('$usertype','$name', '$phoneno', '$emailid', '$password')";
            echo "Data has been inserted";
        }
        mysqli_close($connection);
        header("location:login.php");
?>