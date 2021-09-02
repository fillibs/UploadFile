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
    $query = "SELECT name,month,years FROM uploaded_files";
    $result = mysqli_query($conn, $query);
?>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>รายงานการประชุมประจำเดือน</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="\uploads\index.php" class="btn btn-success btn-sm px-3" data-toggle="modal"><span>อัพโหลด</span></a>						
					</div>
				</div>
			</div>
			
			<table class="table table-striped table-hover">

			<?php foreach ($result as $row) {?>
			<label class="form-label" style="color:red; font-size:160%; font-weight: bold";>ปี <?php echo $row['years']; ?></label>
				<thead>
					<th scope="col">เดือน</th>
					<th scope="col">ชื่อไฟล์</th>
					<th scope="col" style="text-align:center;">ดาวน์โหลด</th>
				</thead>

				<tbody>
					<?php foreach ($result as $row) {?>
					<tr>
					<td><?php echo $row['month']; ?></td>
						<td><?php echo $row['name']; ?> </td>
							<td>
								<button type="button" class="btn btn-warning btn-sm px-3">
									<a href="uploads/<?php echo $row['name']; ?>" download>ดาวน์โหลด</a>
								</button>
							</td>
					</tr>
					<?php } ?>   
				</tbody>
			<?php } ?>  
			</table>

		</div>
	</div>        
</div>
</body>
</html>