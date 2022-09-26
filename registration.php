<?php


$con = mysqli_connect('localhost', 'root', '','details');


$txtFirstName = $_POST['FirstName'];
$txtMiddleName = $_POST['MiddleName'];
$txtLastName = $_POST['LastName'];
$txtOccupation = $_POST['Occupation'];
$txtEmail = $_POST['Email'];
$txtPhoneNumber = $_POST['PhoneNumber'];
$txtAddress = $_POST['Address'];
$txtPassword = $_POST['Password'];
$txtGender = $_POST['Gender'];



// database insert SQL code
$sql = "INSERT INTO `registration`  VALUES ('$txtFirstName','$txtMiddleName','$txtLastName','$txtOccupation', '$txtEmail', '$txtPhoneNumber', '$txtAddress','$txtPassword','$txtGender')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{

 echo "Form submitted";
header('location:r1.html'); 

exit();
}
?>
