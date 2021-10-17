<html>
<head>

</head>
<body>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="container">
	<div class="top-menu">
	College Placement System
	</div>
	<div class="login-menu">
	<a href="stulogin.php">Student Login</a>&nbsp&nbsp<a href="Adminlogin.php">Admin Login</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</div>
	<?php
	$con=mysqli_connect("localhost","root","","placementdb");
	$qry="select * from placement_tbl where expDate>'".date("Y-m-d")."'";
	
	$run=mysqli_query($con,$qry);
	while ($rows=mysqli_fetch_array($run))
	{
		echo "<div class=\"jobbox\">";
		echo "<h3>".$rows['JobID'].". ".$rows['JobDesc']."</h3>"." <p><font color=red> Last Date for Applying :".$rows['ExpDate']."</font></p>" ;
		echo "<b>Company:</b>".$rows['CompanyName']."<br>";
		echo "<b>Location:</b>".$rows['Location']."<br>";
		echo "<b>Date of Interview:</b>".$rows['InterviewDate']."<br>";
		echo "<b>Stream:</b>".$rows['Stream']."&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Salary Package:</b>".$rows['SalPackage']."<br>";
		echo "<b>Qualification:</b>".$rows['Qualification']."&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Other Requirements:</b>".$rows['OtherReq']."<br>";
		echo "</div>";
	}
	
	?>
</div>
</body>
</html>
