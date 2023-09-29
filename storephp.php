<?php 
$connection = mysqli_connect('localhost','root');
if ($connection){
    echo "Connection is established";
}
else{
    echo 'Error connection Failed!';
}
mysqli_select_db($connection,'storeing');
$item = $_POST['item'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

$data = "INSERT INTO  storee(ITEM ,PRICE,QUANTITY,TOTAL) VALUES ('$item','$price','$quantity','$total') ";
mysqli_query ($connection,$data);
header('location:store.php');
?>