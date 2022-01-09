
<?php  
$maNV = $_POST['maNV'];
$hovaten = $_POST['hovaten'];
$chucvu = $_POST['chucvu'];
$phongban = $_POST['phongban'];
$luong = $_POST['luong'];
$ngayvaolam = $_POST['ngayvaolam'];
require'connect.php';
$sql="update NHANVIEN set
hovaten='$hovaten',
chucvu='$chucvu',
phongban='$phongban',
luong='$luong',
ngayvaolam='$ngayvaolam'


where
maNV='$maNV'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header("location:index.php");
?>