<?php 
$connection = mysqli_connect('localhost','root');
if ($connection){
    echo "Connection is established";
}
else{
    echo 'Error connection Failed!';
}
mysqli_select_db($connection,'register');
$fname = $_POST['ffname'];
$lname = $_POST['llname'];

$email = $_POST['eemail'];
$epass = $_POST['eepass'];
$cpass = $_POST['ccpass'];

$data = "INSERT INTO registertable (FNAME,LNAME,EMAIL,EPASS,CPASS) VALUES ('$fname','$lname','$email','$epass','$cpass') ";
mysqli_query ($connection,$data);
header('location:login.php');

?>