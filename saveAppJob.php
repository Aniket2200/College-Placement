<?php 
$con=mysqli_connect("localhost","root","","placementdb");   
session_start();
$sid=$_SESSION['username'];
$jid=$_POST['jid'];
$qry="insert into jobapply_tbl (StuID, JobID) values ('$sid',$jid)";

if (mysqli_query($con,$qry)==true)
	{
		
		echo "<script>alert('Data saved');</script>";
		header('refresh:0;url=http://localhost:8088/placement/studash.php');
	}		
else
{
	
	echo "<script>alert('could not save data');</script>";
	header('refresh:0;url=http://localhost:8088/placement/studash.php');
}

?>
