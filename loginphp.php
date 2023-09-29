<?php 
$connection = mysqli_connect('localhost','root');
if ($connection){
    echo "Connection is established";
}
else{
    echo 'Error connection Failed!';
}
mysqli_select_db($connection,'register');

$email = $_POST['eemail'];
$cpass = $_POST['ccpass'];

$data = "select * from registertable where EMAIL = '$email' && CPASS ='$cpass' ";
$result = mysqli_query($connection,$data);
$num = mysqli_num_rows($result);
if($num ==1){
    header("location:tour.php");

}
else{
    echo "Error while logging IN";
    header("location:login.php");


    

}

?>