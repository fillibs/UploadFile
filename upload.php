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
	
	if($_POST['meeting'] == 'report'){
		$meeting = "1";
	}else{
		$meeting = "2";
	}

	//อัพโหลดไฟล์ลงฐานข้อมูล
	if ($file_size > 10485760) {
		echo "<script>alert('ขนาดไฟล์ที่คุณอัพโหลดเกิน 10 MB.')</script>";
	} else {
		$sql = "INSERT INTO uploaded_files (name,month,years,type)
				VALUES ('$file_name','$months','$years','$meeting')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			move_uploaded_file($file_temp, $location . $file_name);
			echo "<script>alert('อัพโหลดไฟล์สำเร็จ.')</script>";
		} else {
			echo "<script>alert('อัพโหลดไฟล์ไม่สำเร็จ')</script>";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
    include 'config.php';
    $query = "SELECT name FROM uploaded_files";
    $result = mysqli_query($conn, $query);
?>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>ไฟล์อัพโหลด</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="\uploads\index.php" class="btn btn-danger btn-sm px-3" data-toggle="modal" onClick="javascript:history.go(-1)"><span>ย้อนกลับ</span></a>						
					</div>
				</div>
			</div>
			<label for="type" class="form-label"></label>
				<div class="container mb-3">
						คุณได้อัพโหลดไฟล์ 
				</div>
		</div>
	</div>        
</div>
</body>
</html>