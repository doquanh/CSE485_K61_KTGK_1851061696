<?php 
$hovaten = $_POST['hovaten'];
$chucvu = $_POST['chucvu'];
$phongban = $_POST['phongban'];
$luong =$_POST['luong'];
$ngayvaolam =$_POST['ngayvaolam'];


require_once('connect.php');
$sql = "insert into NHANVIEN(hovaten,chucvu,phongban,luong,ngayvaolam) value ('$hovaten','$chucvu','$phongban','$luong','$ngayvaolam')";
 
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
 ?>