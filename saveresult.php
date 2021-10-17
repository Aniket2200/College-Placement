<?php   
if(isset($_POST['submit']))  
{   

$con=mysqli_connect("localhost","root","","placementdb");

		session_start();
		$un=$_SESSION['username'];
		$jid=$_POST["jobid"];
		$res=$_POST["result"];
		
		foreach ($res as $r )
		{
			$qry="update jobapply_tbl set qualified=1 where  JobID='$jid' and StuID='$r'";
			$a=mysqli_query($con,$qry);
		}
		

		if ($a==true)
			{
				//echo $qry;
				echo "<script>alert('Data saved');</script>";
				header('refresh:0;url=http://localhost/CollegePlacement/admdash.php?uname='.$un);
			}		
		else
		{
			//echo $qry;
			echo "<script>alert('could not save data');</script>";
			header('refresh:0;url=http://localhost/CollegePlacement/admdash.php?uname='.$un);
		}
}

?>
