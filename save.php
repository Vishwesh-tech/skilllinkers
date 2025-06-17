<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "skilllinkers";

$con = mysqli_connect($server , $username , $password , $dbname);
if(!$con)
{
    echo "not connected";
}

$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$area = $_POST['area'];

$sql= "INSERT INTO `quote`(`name`, `email`, `service`, `message`) VALUES ('name','email','service','area')";

$result=mysqli_query($con, $sql);
if($result)
{
  echo "data submitted";
}
else
{
    echo "query failed....!"
}

?>
