<html> 
<body>  
<form method = "post" action="dispStuList.php" >   
<table align="center" border="1" width="100%">

	<th colspan="2"> Update Job Result</th>
	
	<tr>
	<td><div class="labl">Job: </div></td>
	<td>	
	<?php
	$con=mysqli_connect("localhost","root","","placementdb");
	$qry="select JobID, JobDesc from placement_tbl";
	$run=mysqli_query($con,$qry);
	echo '<select name="jid">';
	while ($rows=mysqli_fetch_array($run))
	{
		
		echo "<option value=".$rows['JobID'].">".$rows['JobDesc']."</option>";
	}
	?>
				  
	</td>
	</tr>
	
	<th colspan="2" style="background-color:#0055CC;" > <input type = "submit" name = "submit" value="Students Applied"  style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table> 
  
</form>     
</body>   
</html> 
