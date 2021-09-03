<?php 
session_start();
include 'config.php';

$years = $_POST['years'];
$sql = "SELECT month, name FROM uploaded_files where  years = '".$years."'";
$result = $conn->query($sql);

echo $years;    

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["month"]."</td><td>".$row["name"]." </td></tr>";
    }
    
    echo "</table>";
  } else {
    echo "0 results";
  }
  

?>