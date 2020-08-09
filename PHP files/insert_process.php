<?php
$username = 'fanalis';
$password = 'freak';
$connection_string = 'localhost/xe';
$conn = oci_connect($username,$password,$connection_string);
if(isset($_POST['save']))
{	 
	$stud_id = $_POST['stud_id'];
	$lec_id = $_POST['lec_id'];
    $class_id = $_POST['class_id'];
    $staff_id = $_POST['staff_id'];
    $class_condition = $_POST['class_condition'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
	$query = oci_parse($conn, "INSERT INTO schedule (stud_id,lec_id,class_id,staff_id,class_condition,start_time,end_time)
	values ('$stud_id','$lec_id','$class_id','$staff_id','$class_condition','$start_time','$end_time')");
	$result = oci_execute($query);
	if ($result) {
				echo "Data added Successfully !";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}
?>