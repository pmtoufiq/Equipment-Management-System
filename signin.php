<?php
session_start();
	$adminname=$_POST['adminname'];
	$password=$_POST['password'];
	$connection=mysqli_connect("localhost","root","","equipment");
	$query="select * from admin where adminname='$adminname'";
	$result=mysqli_query($connection,$query);
	$num=mysqli_num_rows($result);
	if($num==0){
		echo "No admin found with this admin name! Try to <a href='signin.html'>Sign In</a> again";		
	}
	else{
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		$dbpassword=$row['password'];
		if($password==$dbpassword){
			$_SESSION['adminname']=$adminname;
			$_SESSION['signin']=TRUE;
			header('location:start.html');
		}
		else{
			echo "Password doesn't match, Try to <a href='signin.html'>Sign In</a> again";
		}		
	}
?>