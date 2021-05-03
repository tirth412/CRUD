<?php

include("config1.php");

    $id = $GET['id'];
    echo $id;
    $rollno = $GET['rollno'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $city = $_GET['city'];

    #write update query
    $query = "UPDATE EMPLOYEE SET id ='$id' , rollno = $rollno, name1 = '$name',email = '$email',city= '$city' WHERE id = $id";
    $data = mysqli_query($conn,$query);

    header('location:display.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Table</title>
    <style>
    table {
    color: blue;
    border-radius: 20px;
  }
  #button{
	background-color:green;
	color:white;
	height:32px;
	width:125px;
	border-radius:25px;
	font-size:16px;
  }
  body{
        background: linear-gradient(red,blue);
  }
</style>
</head>
<body>
<br><br><br><br><br><br>  
    <form action = "" method = "POST">
    <table border = "0" bgcolor= "black"  align= "center" cellspacing = "20" >

<!-- <tr><td> 
Id <td><input type = "text" placeholder = "Id" name = "id" required></td>
</tr> -->
<tr><td> 
Roll No <td><input type = "text" placeholder = "Roll No" name = "rollno" required></td>
</tr>
<tr><td> 
Name <td><input type = "text" placeholder = "name" name = "name" required></td>
</tr>
<tr><td> 
Email <td><input type = "text" placeholder = "email address" name = "email" required></td>
</tr>
<tr><td> 
City<td><input type = "text" placeholder = "city" name = "city" required></td>
</tr>

<tr>
	<td align = "center" > <input type = "submit" id = "button" name= "submit" ></td>
</tr>
</table>
</form>
</body>
</html>