<?php
include 'db/conn.php';
// request.php?tank&name=water&qty=100&owner=1
if($_SERVER['REQUEST_METHOD']=="GET"  &&  isset($_GET['tank'])  ){

	$name="";
	$qty="";
	$owner="";
	$dateOf=time();

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name=$_POST['name'];
		$qty=$_POST['qty'];
		$owner=$_POST['owner'];
	}else{
		$name=$_GET['name'];
		$qty=$_GET['qty'];
		$owner=$_GET['owner'];
	}

	if(!preg_match("/^[0-9]*$/",$qty)){
		die("Error request invalid");
	}

	if($qty>100){
		$qty=100;
		echo "Warning : Over 100%, This will be taken as 100% --->";
	}

	$insert=$conn->query("INSERT INTO tank (name,owner,qty,dateOf) values('$name','$owner','$qty','$dateOf')");

	if($insert){
		echo "Ok tank ".$qty."% qty received successfully";
	}else{
		echo "Tank qty failed to record";
	}



}

if($_SERVER['REQUEST_METHOD']=="GET"  &&  isset($_GET['accident'])  ){

	$name="";	
	$owner="";
	$prank="";
	$timeOn=time();

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name=$_POST['name'];
		$owner=$_POST['owner'];
		$prank=$_POST['prank'];
	}else{
		$name=$_GET['name'];
		$owner=$_GET['owner'];
		$prank=$_GET['prank'];
	}

	$insert=$conn->query("INSERT INTO accident (name,owner,prank,timeOn) values('$name','$owner','$prank','$timeOn')");

	if($insert){
		echo "Ok Accident details received successfully";
	}else{
		echo "Accident  details failed to record";
	}



}


?>


