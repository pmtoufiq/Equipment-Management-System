<?php
	$connection=mysqli_connect("localhost","root","");
	
	$query="drop database if exists equipment";
	if(mysqli_query($connection,$query)) echo "Existing Database Successfully Dropped!<br/>";
	else echo mysqli_error($connection);
	
	$query="create database equipment";
	if(mysqli_query($connection,$query)) echo "The New Database Successfully Created!<br/>";
	else echo mysqli_error($connection);
	
	$connection=mysqli_connect("localhost","root","","equipment");

	$query="CREATE TABLE `equipmentinfo` (
			  `equipmentid` int(11) NOT NULL AUTO_INCREMENT,
			  `equipmentname` varchar(50) NOT NULL,
			  `buyingprice` float(30) NOT NULL,
			  `specification` varchar(100) NOT NULL,
			  `importdate` varchar(15) NOT NULL,
			  `workingability` varchar(100) NOT NULL,
			  `fuelperhour` varchar(30) NOT NULL,
			  PRIMARY KEY (`equipmentid`)
			) ";
	if(mysqli_query($connection,$query)) echo "The Equipment Information Table Created Seccessfully!<br/>";
	else echo mysqli_error($connection);
	
	$query="CREATE TABLE `clientinfo` (
			  `clientid` int(11) NOT NULL AUTO_INCREMENT,
			  `clientname` varchar(30) NOT NULL,
			  `houseno` varchar(20) NOT NULL,
			  `streetaddress` varchar(80) NOT NULL,
			  `postalcode` varchar(12) NOT NULL,
			  `contactno` varchar(15) NOT NULL,
			  `email` varchar(50) NOT NULL,
			  `companyname` varchar(50) NOT NULL,
			  `companyaddress` varchar(50) NOT NULL,
			  PRIMARY KEY (`clientid`)
			) ";
	if(mysqli_query($connection,$query)) echo "The Client Information Table Created Successfully!<br/>";
	else echo mysqli_error($connection);
	
	$query="CREATE TABLE `rentinfo`(
			  `rentid` int(11) NOT NULL,
			  `equipmentid` int(11) NOT NULL,
			  `clientid` int(11) NOT NULL,
			  `hiringdatetime` varchar(40) NOT NULL,
			  `returningdatetime` varchar(40) NOT NULL,
			  `expiredatetimeforfine` varchar(40) NOT NULL,
			  `totalhour` float(20) NOT NULL,
			  PRIMARY KEY (rentid)
			)";
	if(mysqli_query($connection,$query)) echo "The Rental Information Table Created Successfully!<br/>";
	else echo mysqli_error($connection);
	
	$query="CREATE TABLE `admin` (
			  `adminname` varchar(50) NOT NULL,
			  `email` varchar(50) NOT NULL,
			  `password` varchar(10) NOT NULL,
			  PRIMARY KEY (adminname)
			)";
	if(mysqli_query($connection,$query)) echo "The Administrator Table Created Successfully!<br/>";
	else echo mysqli_error($connection);
	
	$query="ALTER TABLE `admin` AUTO_INCREMENT=10001";
	if(mysqli_query($connection,$query)) echo "The Administrator Table Successfully Alterred";
	else echo mysqli_error($connection);
	
	$query="insert into admin(adminname,email,password) values('toufiqur','toufiq@gmail.com','1234')";
	$result=mysqli_query($connection,$query);
?>