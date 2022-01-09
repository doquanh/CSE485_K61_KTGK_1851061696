
<!DOCTYPE html>
<html>
<head>
	<title>them admin</title>
	<link rel="stylesheet" type="text/css" href="insert.css">
</head>
<?php 
	$maNV=$_GET['maNV'];
	require 'connect.php';

	$sql ="select * from NHANVIEN where maNV = '$maNV'";
	$result =mysqli_query($connect,$sql);
	$each= mysqli_fetch_array($result);

	 ?>
<body>
	<div class="wrapper">
		<div class="container">
			<form class="form" action="process_update.php" method="POST">
		<input type="hidden" name="maNV" value='<?php echo $each['maNV'] ?>'>
		<input type="text" name="hovaten" value='<?php echo $each['hovaten'] ?>'>
		
		<input type="text" name="chucvu" value='<?php echo $each['chucvu'] ?>'>
	
		<input type="text" name="phongban" value='<?php echo $each['phongban'] ?>'>
	
		<input type="float" name="luong" value='<?php echo $each['luong'] ?>'>
		<input type="date" name="ngayvaolam" value='<?php echo $each['ngayvaolam'] ?>'>
		
		
		<button>Fix</button>
	</form>
</div>
</div>
<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</body>
</html>