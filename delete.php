<?php
//including the database connection file
include("dbconnection.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result =sqlsrv_query($conn, "DELETE FROM data WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

