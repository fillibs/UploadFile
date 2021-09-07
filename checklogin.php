<?php 
session_start();
        if(isset($_POST['username'])){
                  include("config.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM login 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["userID"] = $row["userID"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: index_upload.php");
                      }
                  if ($_SESSION["level"]=="member"){ 

                        Header("Location: download.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\"รหัสผ่านของคุณไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index_upload.php"); //รหัสไม่ถูกต้องจะย้อนกลับมา
 
        }
?>