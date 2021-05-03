<?php
include("config1.php");
$id = $_GET['id'];

$sql = "DELETE FROM EMPLOYEE WHERE id = $id";

mysqli_query($conn,$sql);
header('location:display.php');
?>