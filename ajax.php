<?php

require 'db/conn.php';

if(isset($_GET['tank'])){
	$id=$_GET['user'];

	$select=$conn->query("SELECT qty from tank where owner='$id' order by id DESC limit 1");

	if($select){
		if($select->num_rows>0){
			$details=$select->fetch_assoc();
			echo $details['qty'];
		}
	}
}




?>