<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
  $("#stuDetails").click(function(){
    $("#contents").load("stuDetails.php");
  });
  
  $("#ApplyJob").click(function(){
    $("#contents").load("applyjob.php");
  });
  $("#CheckRes").click(function(){
    $("#contents").load("checkres.php");
  });
  
  $("#ChangePwd").click(function(){
    $("#contents").load("chngpwd.php");
  });
});
</script>
</head>
<body>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="container">
	<div class="top-menu">
	College Placement System
	</div>
	<div class="login-menu">
	<?php
	session_start();
	$un=$_SESSION["username"];
	echo '<a href="logout.php">'.$un.'&nbspLogout</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	?>
	
	</div>
	<div class="clearfix">
	<div class="left-menu">
		<div class="listItem"><a id="stuDetails" href="#">Enter Your Details</a></div>
		<div class="listItem"><a id="ApplyJob" href="#">Apply for a Job</a></div>
		<div class="listItem"><a id="CheckRes" href="#">Check Interview Result</a></div>
		<div class="listItem"><a id="ChangePwd" href="#">Change password</a></div>
	</div>
	
	<div class="dataform" ">
	<div class="form-data" id="contents" style=" box-shadow: 10px 10px lightgrey;">
	
	</div>
	</div>
	</div>
</div>

</body>
</html>
