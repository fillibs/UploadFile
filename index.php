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
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
                    <div class="col-sm-6">
						<h2><b>รายงานและวาระการประชุมประจำเดือน</b></h2>
                    </div>
                    <div class="col-sm-6">
						<a href="\uploads\download.php" class="btn btn-warning btn-sm px-3" data-toggle="modal"><span>ดาวน์โหลด</span></a>						
					</div>
				</div>
			</div>

			<!-- Form Upload -->
			<form>
				<legend>อัพโหลด</legend>

				<!-- Dropdown Types -->
				<div class="mb-3">
					<label for="type" class="form-label">ประเภท</label>
					<select id="type" class="form-select">
						<option value="report">รายงานการประชุมประจำเดือน</option>
						<option value="term">วาระการประชุมประจำเดือน</option>
					</select>
				</div>

				<!-- Dropdown Months -->
				<div class="mb-3">
					<label for="month" class="form-label">เดือน</label>
					<select id="month" class="form-select">
						<option value="1">มกราคม</option>
						<option value="2">กุมภาพันธ์</option>
						<option value="3">มีนาคม</option>
						<option value="4">เมษายน</option>
						<option value="5">พฤษภาคม</option>
						<option value="6">มิถุนายน</option>
						<option value="7">กรกฎาคม</option>
						<option value="8">สิงหาคม</option>
						<option value="9">กันยายน</option>
						<option value="10">ตุลาคม</option>
						<option value="11">พฤศจิกายน</option>
						<option value="12">ธันวาคม</option>
					</select>
				</div>

				<!-- Dropdown Years -->
				<div class="mb-3">
					<label for="years" class="form-label">ปี</label>
					<select id="years" class="form-select">
						<option value="1">2561</option>
						<option value="2">2562</option>
						<option value="3">2563</option>
						<option value="4">2564</option>
						<option value="5">2565</option>
					</select>
				</div>

				<!-- Input Change Name -->
				<label class="form-label">ชื่อหัวข้อ</label>
				<div class="mb-3">
					<input type="email" class="form-control" id="name" placeholder="ครั้งที่ - / ปี -">
				</div>
			</form>
			
				<!-- Upload PDF Files -->
				<form action="upload.php" method="POST" enctype="multipart/form-data" class="body">
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