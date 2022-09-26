<?php


$con = mysqli_connect('localhost', 'root', '','details');


$txtName = $_POST['Name'];
$txtEmail = $_POST['Email'];
$txtMessage = $_POST['Message'];


// database insert SQL code
$sql = "INSERT INTO `feedback` VALUES ('$txtName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{

 echo "Feedback submitted";
header('location:sample.html'); 

exit();
}
?>
