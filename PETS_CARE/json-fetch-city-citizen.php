<?php

include_once("Connection.php");

$query="select distinct pet from posts";

$table=mysqli_query($conn,$query);

$ary=array();

	while($record=mysqli_fetch_array($table))//gives a record at a time
	{
		$ary[]=$record;//each record is stored in array
	}

echo json_encode($ary);
?>