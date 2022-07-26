
<?php
/*
//--------------------windows authentication-----------------------------------
$serverName = "DESKTOP-4366VNV\SQLEXPRESS"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"emp");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
*/
?>

<?php
//odbc_connect('test','sa','sqltest');
 /* 
//Specify the server and connection string attributes. 
$serverName = "DESKTOP-4366VNV\SQLEXPRESS";  
$connectionInfo = array( "Database"=>"employee","ID"=>"sa", "PWD"=>"sqlUtest");  
  
//Connect using Windows Authentication.  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Unable to connect.</br>";  
     die( print_r( sqlsrv_errors(), true));  
}
else {
     echo "connected sucessfully";
}  
  
 //Query SQL Server for the login of the user accessing the  database. 
$tsql = "SELECT CONVERT(varchar(32), SUSER_SNAME())";  
$stmt = sqlsrv_query( $conn, $tsql);  
if( $stmt === false )  
{  
     echo "Error in executing query.</br>";  
     die( print_r( sqlsrv_errors(), true));  
}  
  
//Retrieve and display the results of the query.   
$row = sqlsrv_fetch_array($stmt);  
echo "User login: ".$row[0]."</br>";  
  
//Free statement and connection resources. 
sqlsrv_free_stmt( $stmt);  
sqlsrv_close( $conn);
*/
?>



<?php
               //-------------sql server authentication-----------------------
$serverName = "DESKTOP-4366VNV\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"users","UID"=>"sa", "PWD"=>"sqltest");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>

<?php
//$test=mssqli_connect('192.168.0.100','sa','sqltest')
//or die('some think wrong');
//if ($test) 
//{
///    echo 'connected';# code...
//}
//else{
//echo 'not connected';
//}

?>