<?php
include('connection.php');
$id = (int)$_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$query = 'INSERT INTO tbl_phone (id, phone_name, price) VALUES('""','".$nama."', price = '".$harga.'"')';
if($id > 0){
$query = 'UPDATE tbl_phone SET phone_name = '".$nama."', price = '".$harga."' where id ='.$id;
}
mysqli_query($query) or die(mysqli_error());
?>
