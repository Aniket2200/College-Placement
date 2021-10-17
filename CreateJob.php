<html>  
<body>  
<form method = "post" action ="savedata.php"> 
<table align="center" border="1" width="70%">

	<th colspan="2"> Add a New Job for Placement	</th>
	<tr>
	<td><div class="labl">Job ID: </div></td>
	<td><input type="string" name="JobID"></td> 
	</tr>
	<tr>
	<td><div class="labl">Job Description: </div></td>
	<td><input type="string" name="JobDesc"></td>
	</tr>
	<tr>
	<td><div class="labl">Company Name: </div></td>
	<td><input type="string" name="Company" style="width:400px;height:50px"></td>
	</tr>
	<tr>
	<td><div class="labl">Post Date: </div></td>
	<td><input type="date" name="PostDate" value=<?php echo date('d-m-y');?>> </td>
	</tr>
	<tr>
	<td><div class="labl">Interview Date: </div></td>
	<td><input type="date" name="Interdate"> </td>
	</tr>
	<tr>
	<td><div class="labl">Job Expiry Date: </div></td>
	<td><input type="date" name="expDate" value=<?php echo date('d-m-y');?>> </td>
	</tr>
	<tr>
	<td><div class="labl">Stream: </div></td>
	<td>	<select name="strm">
			  <option value="Comp Science">Computer Science</option>
			  <option value="Science">Science</option>
			  <option value="Commerce">Commerce</option>
			  <option value="Business Administration">Business Administration</option>
			  <option value="Arts">Arts</option>
			</select>
	</td></tr>
	<tr>
	<td><div class="labl">Qualification: </div></td>
	<td><select name="Qual">
			  <option value="Graduation">Graduation</option>
			  <option value="Masters">Master</option>
			  <option value="Post Graduate Diploma">Post Graduate Diploma</option>
			  <option value="Certificate">Certificate</option>
			  <option value="PhD">PhD</option>
			  <option value="MPhil">MPhil</option>
			</select>
	</td></tr>
	<tr>
	<td><div class="labl">Other Requirements: </div></td>
	<td><input type="string" name="oreq" > </td>
	</tr>
	<tr>
	<td><div class="labl">Salary Package: </div></td>
	<td><input type="string" name="salPack" width="300px"></td>
	</tr>
	<tr>
	<td><div class="labl">Location: </div></td>
	<td><input type="string" name="Loc" > </td>
	</tr>
	
	<th colspan="2" style="background-color:#0055CC;" > <input type = "submit" name = "submit" value="Save Job" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table> 
  
</form>   
</body>   
</html>
