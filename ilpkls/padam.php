<?php
include 'connection.php';

$nokp = $_GET['nokp'];
$result = mysqli_query($mysqli,"DELETE FROM pelajar WHERE nokp = '$nokp'");
 echo "<script>window.location='index.php'</script>";

 ?>