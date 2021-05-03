
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>
    <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
    </style>
</head>
<body>
    <table class = "styled-table">
    <thead>
    <tr>
        <th> Id </th>
        <th> Rollno </th>
        <th>Name</th>
        <th>Email id</th>
        <th>City</th>
        <th>Update </th>
        <th>Delete </th>
        
    </tr>
    </thead>
<?php
include("config1.php");
error_reporting(0);
$query = "SELECT * FROM EMPLOYEE";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

echo $result['name']. " " .$result['email']. " " .$result['city'];
$id = 0;
if($total != 0)
{
    
    while($result = mysqli_fetch_assoc($data))
    {
        $id  = $id + 1;

        echo "
        <tbody>
        <tr> 
        <td> ".$id."</td> 
        <td> ".$result['rollno']."</td>
        <td> ".$result['name']."</td>
        <td> ".$result['email']."</td>
        <td> ".$result['city']."</td>
        <td> <button class = 'btn-danger btn'> <a href='edit_file.php?id= $result[id] ' class = 'text-white'> Update </a> </ button> </td>
        <td> <button> <a href='delete.php?id= $result[id] '> Delete </a></button> </td>
        </tr>
        </tbody>
        ";
    }
}
?>
    </table>

</body>
</html>

