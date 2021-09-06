<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>อัพโหลดรายงานและวาระการประชุมประจำเดือน</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-xl">
	<div class="col-sm-6" style="margin-top: 25px;">
		<?php 
			if (!$_SESSION["ID"]){	
				session_destroy();?>
				<a href="\uploads\login.php" class="btn btn-outline-danger btn-sm px-3" data-toggle="modal"><span>ออกจากระบบ</span></a>	
		<?php }?>					
	</div>
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
                    <div class="col-sm-6">
						<h2><b>เพิ่มรายงานและวาระการประชุมประจำเดือน</b></h2>
                    </div>
                    <div class="col-sm-6">
						<a href="\uploads\download.php" class="btn btn-warning btn-sm px-3" data-toggle="modal"><span>ดาวน์โหลด</span></a>						
					</div>
				</div>
			</div>
			<form action="upload.php" method="POST" enctype="multipart/form-data" class="body" >

			<!-- Form Upload -->
				<legend>อัพโหลด</legend>

				<!-- Dropdown Types -->
				<label for="type" class="form-label">ประเภท</label>
				<div class="mb-3">
					<select id="type" class="form-select" name = "meeting">
						<option value="report">รายงานการประชุมประจำเดือน</option>
						<option value="term">วาระการประชุมประจำเดือน</option>
					</select>
				</div>

				<!-- Dropdown Months -->
					<label for="month" class="form-label">เดือน</label>
					<div class="mb-3">
						<select id="month" class="form-select" name = "months">
							<option value="มกราคม">มกราคม</option>
							<option value="กุมภาพันธ์">กุมภาพันธ์</option>
							<option value="มีนาคม">มีนาคม</option>
							<option value="เมษายน">เมษายน</option>
							<option value="พฤษภาคม">พฤษภาคม</option>
							<option value="มิถุนายน">มิถุนายน</option>
							<option value="กรกฎาคม">กรกฎาคม</option>
							<option value="สิงหาคม">สิงหาคม</option>
							<option value="กันยายน">กันยายน</option>
							<option value="ตุลาคม">ตุลาคม</option>
							<option value="พฤศจิกายน">พฤศจิกายน</option>
							<option value="ธันวาคม">ธันวาคม</option>
						</select>
					</div>

				<!-- Dropdown Years -->
					<label for="years" class="form-label">ปี</label>
					<div class="mb-3">
					<select id="years" class="form-select" name="years">
						<option value="2561">2561</option>
						<option value="2562">2562</option>
						<option value="2563">2563</option>
						<option value="2564">2564</option>
						<option value="2565">2565</option>
					</select>
					</div>

				<!-- Input New Name -->
					<label id="new_name" for="new_name" class="form-label">ตั้งชื่อไฟล์</label>
					<div class="mb-3">
						<div class="form-group">
							<input type="text" class="form-control" name="new_name" id="new_name" required>
						</div>
					</div>
			
				<!-- Upload PDF Files -->
					<label id="file" class="form-label">อัพโหลดไฟล์</label>
					<div class="mb-3">
						<input type="file" name="file" id="upload" required>
					</div>
					<div>
						<button name="upload" class="btn btn-success btn-sm px-3" data-toggle="modal"><span>อัพโหลด</span></button>
					</div>
				</form>
        </div>
	</div>        
</div>
</body>
</html>