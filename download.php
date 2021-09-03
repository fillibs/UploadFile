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
    //$query = "SELECT name,month,years FROM uploaded_files";
    //$result = mysqli_query($conn, $query);
?>

<!-- ค้นหารายงานการประชุมประจำเดือน -->
<div class="container-xl">
	<div class="table-responsive">
	<div class="col-sm-6" style="margin-bottom: 20px;">
		<a href="\uploads\index.php" class="btn btn-success btn-sm px-3" data-toggle="modal"><span>อัพโหลด</span></a>						
	</div>
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>รายงานการประชุมประจำเดือน</b></h2>
					</div>
				</div>
			</div>
			
			<table class="table table-striped table-hover">

			<legend>ค้นหารายงานการประชุมประจำเดือน</legend>
			
			<label for="years" class="form-label">ปี</label>
			<form action="download.php" method="POST" enctype="multipart/form-data" class="body" >
				<div class="mb-3">
					<select id="years" class="form-select" name="years">
						<option value="2561">2561</option>
						<option value="2562">2562</option>
						<option value="2563">2563</option>
						<option value="2564">2564</option>
						<option value="2565">2565</option>
					</select>
				</div>
				<div class="col-sm-6 magin" style="margin-bottom: 20px;">
					<button class="btn btn-info btn-sm px-3" data-toggle="modal" type="submit"><span>ค้นหา</span></button>						
				</div>
			</form>

			<?php 

			$perpage = 5;
			if (isset($_GET['page'])) {
			$page = $_GET['page'];
			} else {
			$page = 1;
			}
			$start = ($page - 1) * $perpage;

			$years = $_POST['years'];
			$sql = "SELECT month, name FROM uploaded_files
			where  type = 1 limit {$start} , {$perpage} ";
			
			
	
			$result = $conn->query($sql);
			
			?>
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

			<?php
			$sql2 = "select * from uploaded_files where  type = 1 ";
			$query2 =  $conn->query($sql2);
			$total_record = mysqli_num_rows($query2);
			$total_page = ceil($total_record / $perpage);
			?>
			<nav aria-label="Page navigation example" class="d-flex justify-content-center">
				<ul class="pagination">
				<li class="page-item">
				<a class="page-link" href="download.php?page=1" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
				</li>
				<?php for($i=1;$i<=$total_page;$i++){ ?>
				<li class="page-item"><a class="page-link" href="download.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
				<li class="page-item">
				<a class="page-link" href="download.php?page=<?php echo $total_page;?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
				</li>
			</ul>
			</nav>

		</div>
	</div>        
</div>

<!-- ค้นหาวาระการประชุมประจำเดือน -->

<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>วาระการประชุมประจำเดือน</b></h2>
					</div>
				</div>
			</div>
			
			<table class="table table-striped table-hover">

			<legend>ค้นหาวาระการประชุมประจำเดือน</legend>

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
				<div class="col-sm-6 magin" style="margin-bottom: 20px;">
					<a href="" class="btn btn-info btn-sm px-3" data-toggle="modal"><span>ค้นหา</span></a>						
				</div>

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
	<script src="bootstrap/js/bootstrap.min.js"></script>        
</div>
</body>
</html>