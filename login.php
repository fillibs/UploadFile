<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>เข้าสู่ระบบ</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style_2.css">
</head>
<body>

<div class="modal-dialog modal-login">
	<div class="modal-content">
		<div class="modal-header">
            <div class="avatar">
                <img src="/uploads/image/logo.png" alt="Logo">
            </div>				
				<h4 class="modal-title">เข้าสู่ระบบ</h4>
		</div>
			<div class="modal-body">
				<form name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">เข้าสู่ระบบ</button>
					</div>
				</form>
			</div>
	</div>
</div>
     

</body>
</html>