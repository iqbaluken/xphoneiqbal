<?php
include('connection.php');
$id = (int)$_POST['id'];
$query = 'DELETE FROM tbl_phone WHERE id ='.$id;
$result = mysqli_query($query) or die(mysqli_error());
if(mysqli_affected_rows() > 0){
	echo 'Delete Data Success';
}else{
	echo '';
}
?>