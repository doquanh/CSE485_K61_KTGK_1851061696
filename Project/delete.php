
<?php 
$maNV = $_GET['maNV'];
require_once('connect.php');
$sql = "delete from NHANVIEN where maNV = '$maNV'";

mysqli_query($connect,$sql);
mysqli_close($connect) ;
header("location:index.php");
 ?>