<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("dbconnection.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$age =$_POST['age'];
	$email =$_POST['email'];
	echo $name,$age,$email;	
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = sqlsrv_query($conn, "INSERT INTO data(name,age,email) VALUES('$name','$age','$email')");

if( $result === false) {
die( print_r( sqlsrv_errors(), true) );
}

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
