<?php
	$username = 'fanalis';
    $password = 'freak';
    $connection_string = 'localhost/xe';
    $connection = oci_connect($username,$password,$connection_string);
	$query = oci_parse($connection, "DELETE FROM students WHERE stud_id='" . $_GET["stud_id"] . "'");
	$result = oci_execute($query, OCI_DEFAULT);  
	if($result)  
	{  
		oci_commit($connection);
		echo "Data Deleted Successfully.";
	}
	else{
		echo "Error.";
	}
?>

