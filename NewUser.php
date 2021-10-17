<html>  
<body>  
<form method = "post" action="saveuser.php">   
<table align="center" border="1" width="70%">

	<th colspan="2"> Add a New User</th>
	
	<tr>
	<td><div class="labl">User Name: </div></td>
	<td><input type="string" name="username" ></td>
	</tr>
	<tr>
	<td><div class="labl">Password: </div></td>
	<td><input type="password" name="password" ></td>
	</tr>
	<tr>
	<td><div class="labl">User Type: </div></td>
	<td><input type="radio" name="userType" value="admin"> Admin<input type="radio" name="userType" value="student">Student
	
	
	</td>
	</tr>
		
	<th colspan="2" style="background-color:#0055CC;" > <input type = "submit" name = "submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table> 
  
</form>     
</body>   
</html>
