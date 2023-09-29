<?php 
$connection = mysqli_connect('localhost','root');
if ($connection){
    echo "Connection is established";
}
else{
    echo 'Error connection Failed!';
}
mysqli_select_db($connection,'subscribe');
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$country = $_POST['country'];
$dob = $_POST['dob'];


$data = "INSERT INTO subinfo (NAME,EMAIL,PASS,COUNTRY,DOB) VALUES ('$name','$email','$password','$country','$dob') ";
mysqli_query ($connection,$data);
header('location:subscribe.php');
?>