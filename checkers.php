<table border="1" width="100%">
<tr>
<th>Job Name</th>
<th>Company Name</th>
<th> Date of Interview</th>
<th>Result</th>
</tr> 
<?php 
$con=mysqli_connect("localhost","root","","placementdb");
  
session_start();
$un=$_SESSION['username'];

$qry="select j.JobDesc , j.CompanyName,Qualified, j.InterviewDate from JobApply_tbl s, Placement_tbl j where s.JobID=j.JobID and s.StuID='$un'";
//echo $qry;
$i=1;
$recset=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($recset))
{
	if ($i%2==0)
	{
		echo "<tr bgcolor='#B7F7F2'><td>";
	}
	else
	{	
		echo "<tr bgcolor='#6BF5F1'><td>";
	}
	$i++;	
	echo $row["JobDesc"];
	echo "</td>";
	echo "<td>";
	echo $row["CompanyName"];
	echo "</td>";
	echo "<td>";
	echo $row["InterviewDate"];
	echo "</td>";
	echo "<td>";
	if ($row["Qualified"]==1)
		echo 'Selected';
	else 
		echo 'Not Selected';
	echo "</td></tr>";
}
 
?>
</table>
