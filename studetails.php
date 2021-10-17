<html>  
<body>  
<form method = "post" action="saveStu.php">   
<table align="center" border="1" width="70%">

	<th colspan="2"> Add Your Details	</th>
	<tr>
	<td><div class="labl">StudentID/Roll No: </div></td>
	<td><input type="string" name="rollno"></td> 
	</tr>
	<tr>
	<td><div class="labl">Name: </div></td>
	<td><input type="string" name="stuname"></td>
	</tr>
	<tr>
	<td><div class="labl">Father's Name: </div></td>
	<td><input type="string" name="fname" ></td>
	</tr>
	<tr>
	<td><div class="labl">Date of Birth: </div></td>
	<td><input type="date" name="dob" value=<?php echo date('Y-m-d H:i:s');?></td> 
	</tr>	
	<tr>
	<td><div class="labl">Contact Number: </div></td>
	<td><input type="string" name="contno" ></td>
	</tr>
	<tr>
	<td><div class="labl">Email ID: </div></td>
	<td><input type="string" name="email" ></td>
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
	<td><div class="labl">Course: </div></td>
	<td><select name="course">
			  <option value="BCA">BCA</option>
			  <option value="B.Sc.">B.Sc.</option>
			  <option value="PGDCA">PGDCA</option>
			  <option value="PGDMC">PGDMC</option>
			  <option value="BBA">BBA</option>
			  <option value="BCOM">BCOM</option>
			  <option value="BA">BA</option>
			  <option value="MCOM">MCOM</option>
			  <option value="M.Sc.">M.Sc.</option>
			</select>
	</td></tr>
	
	<td><div class="labl">last Score in %age: </div></td>
	<td><input type="float" name="score"> </td>
	</tr>
	<tr>
	<td><div class="labl">Area of Interest: </div></td>
	<td><input type="string" name="AreaInt" > </td>
	</tr>
		
	<th colspan="2" style="background-color:#0055CC;" > <input type = "submit" name = "submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table> 
  
</form>     
</body>   
</html>  
