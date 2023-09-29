<?php 
$connection = mysqli_connect('localhost','root');
if ($connection){
    echo "Connection is established";
}
else{
    echo 'Error connection Failed!';
}
mysqli_select_db($connection,'bookticket');
$fname = $_POST['name'];
$email = $_POST['email'];
$tourdate = $_POST['tdd'];
$totalt = $_POST['no'];

$data = "INSERT INTO  ticketinfo(TDATE,UNAME,EMAIL,TOTALTICKETS) VALUES ('$tourdate','$fname','$email','$totalt') ";
mysqli_query ($connection,$data);
header('location:home.php');
?>