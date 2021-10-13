<?php
$connection=mysqli_connect("localhost","root","","phptestfile");
//print_r($connection);
if($connection===false){
    die("Something went wrong with your connection".mysqli_connect_error());
}
echo "connection created successfully<br>";
echo "Connection host is as follows<br>".mysqli_get_host_info($connection);
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$created_by=1;
$query="INSERT INTO users(name,email,password,created_by)VALUE('$name','$email','$password','$created_by')";
if(mysqli_query($connection,$query))
{
echo "<br>Data has been inserted successfully";
}
else{
    echo "<br>Data could not be inserted";
    echo "<br>Check error trace<br>".mysqli_error($connection);
}
mysqli_close($connection);
?>
