<html>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bgr.css">

</head>
<body>
<?php 

require_once('connect.php');

$sql = "select * from NHANVIEN";

$result = mysqli_query($connect,$sql);

?>

<button><a href="form_insert.php">Thêm</a></button>

<button><a href="index.php">Menu</a></button>
<table border="1" width="100%">
	<tr>
		<th>Mã Nhân Viên</th>
		<th>Họ Và Tên</th>
		<th>Chức Vụ</th>
		<th>Phòng Ban</th>
		<th>Lương</th>
		<th>Ngày Vào Làm</th>
		<th>Sửa</th>
		<th>Xoá</th>

	</tr>
	<?php foreach ($result as $each) :?>
		<tr>
			<td> 
				<?php echo $each['maNV'] ?>
			</td>
			<td>
				<?php echo $each['hovaten'] ?>
			</td>
			
			<td>
				<?php echo $each['chucvu'] ?>
			</td>
			<td>
				<?php echo $each['phongban'] ?>
			</td>
			<td>
				<?php echo $each['luong'] ?>
			</td>
			<td>
				<?php echo $each['ngayvaolam'] ?>
			</td>
			<td>

				<a href="form_update.php?maNV=<?php echo $each['maNV'] ?>">Sửa</a>
			</td>
			<td>
				<a href="delete.php?maNV=<?php echo $each['maNV'] ?>">Xóa</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<?php mysqli_close($connect); ?>

</body>
</html>
</html>