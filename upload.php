<?php 
session_start();
include 'config.php';

if (isset($_POST['upload'])) {
	$location = "uploads/";
	$file_name = $_FILES["file"]["name"];
	$file_temp = $_FILES["file"]["tmp_name"];
	$file_size = $_FILES["file"]["size"];

	$months = $_POST['months'];
	$years = $_POST['years'];
	$new_name = $_POST['new_name'];
	
	if($_POST['meeting'] == 'report'){
		$meeting = "รายงานการประชุมประจำเดือน";
	}else{
		$meeting = "วาระการประชุมประจำเดือน";
	}
 
	

	//อัพโหลดไฟล์ลงฐานข้อมูล
	if ($file_size > 10485760) {
		echo "<script>alert('ขนาดไฟล์ที่คุณอัพโหลดเกิน 10 MB.')</script>";
	} else {
		$sql = "INSERT INTO uploaded_files (name,new_name,month,years,type)
				VALUES ('$file_name','$new_name','$months','$years','$meeting')";
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

<form>
	<input type="button" value="ย้อนกลับ" onClick="javascript:history.go(-1)" />
</form>