<?php
require 'db/conn.php';
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['Userid']) || !isset($_SESSION['email']) || empty($_SESSION['username']) || empty($_SESSION['Userid']) || empty($_SESSION['email']) ){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>iRwandaSystem Irrigate my fruits</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<div style="min-height: 550px;margin-top: 20px;padding: 0 !important;border:1px solid rgb(230,230,230)" class="w3-row  w3-white col-md-8 col-lg-8 col-sm-12 col-lg-12 col-md-offset-2 col-lg-offset-2 ">
		<div class="container  w3-blue col-md-12 col-lg-12 col-sm-12 col-xs-12" style="min-height: 60px;padding-top: 2px;">
			<img src="images/logo.jpg" style="height: 50px;width: 50px;border-radius: 50%;"> <span>iRwandaSystem </span>
			<p style="float: right;margin-top: 10px;">Made In Rwanda Technology System, Made for Rwandans,easy life,best monitoring system  <br> combined all in  One.</p>
		</div>

		<div class="col-md-8 col-lg-8 col-sm-12 col-lg-12 w3-border-right" style="min-height: 550px;width: 80%;padding: 0 !important">
