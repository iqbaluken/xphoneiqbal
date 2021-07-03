<?php
include('connection.php');
$query = 'SELECT id, phone_name nama, price harga FROM tbl_phone';
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$data = array();
while ($row = mysqli_fetch_object($result)) {
  	$data['handphone'][]= $row;
  }  
echo json_encode($data);
?>