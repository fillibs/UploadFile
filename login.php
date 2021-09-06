<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ค้นหารายงานและวาระการประชุมประจำเดือน</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="login-form">
    <form name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <h2 class="text-center">เข้าสู่ระบบ</h2>       
        <div class="form-group">
            <input type="text"  name="username" class="form-control" required placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" required placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" id="btn">เข้าสู่ระบบ</button>
        </div>       
    </form>

</div>
</body>
</html>