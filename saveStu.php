<?php   
if(isset($_POST['submit']))  
{   

$con=mysqli_connect("localhost","root","","placementdb");

if (!empty(	$_POST["rollno"]) and !empty($_POST["stuname"]))
{
$rno=(integer)$_POST["rollno"];
$snam=$_POST["stuname"];
$fnam=$_POST["fname"];
$dob=$_POST["dob"];
$ph=$_POST["contno"];
$email=$_POST["email"];
$strm=$_POST["strm"];
$cors=$_POST["course"];
$scor=(float)$_POST["score"];
$areaInt=$_POST["AreaInt"];
session_start();
$un=$_SESSION['username'];

$qry="insert into stureg_tbl values ('$un',$rno,'$snam','$fnam','$dob','$ph','$email','$strm','$cors',$scor,'$areaInt')";

if (mysqli_query($con,$qry)==true)
	{
		
		echo "<script>alert('Data saved');</script>";
		header('refresh:0;url=http://localhost/CollegePlacement/studash.php?uname='.$un);
	}		
else
{
	
	echo "<script>alert('could not save data');</script>";
			header('refresh:0;url=http://localhost/CollegePlacement/studash.php?uname='.$un);
}
}
else
{
	echo "<script>alert('fields cannot be left empty');</script>";
			header('refresh:0;url=http://localhost/CollegePlacement/studash.php?uname='.$un);
}
}
?>
