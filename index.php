<?php 

include 'config.php';

$link = "";
$link_status = "display: none;";

if (isset($_POST['upload'])) {
	$location = "uploads/";
	$file_new_name = date("dmy") . time() . $_FILES["file"]["name"];
	$file_name = $_FILES["file"]["name"];
	$file_temp = $_FILES["file"]["tmp_name"];
	$file_size = $_FILES["file"]["size"];

	//อัพโหลดไฟล์ลงฐานข้อมูล
	if ($file_size > 10485760) {
		echo "<script>alert('ขนาดไฟล์ที่คุณอัพโหลดเกิน 10 MB.')</script>";
	} else {
		$sql = "INSERT INTO uploaded_files (name, new_name)
				VALUES ('$file_name', '$file_new_name')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			move_uploaded_file($file_temp, $location . $file_new_name);
			echo "<script>alert('อัพโหลดไฟล์สำเร็จ.')</script>";
		} else {
			echo "<script>alert('อัพโหลดไฟล์ไม่สำเร็จ')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>upload</title>
</head>
<body>
	<div class="file__upload">
		<div class="header">
			<p><span>อัพโหลด</span></p>			
		</div>
		<form action="" method="POST" enctype="multipart/form-data" class="body">
			<input type="checkbox" id="link_checkbox">
			<input type="file" name="file" id="upload" required>
			<label for="upload">
				<p>
					<span>เลือกไฟล์</span>
				</p>
			</label>
			<button name="upload" class="btn">อัพโหลด</button>
		</form>
	</div>
</body>
</html>