<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#newJob").click(function(){
    $("#contents").load("CreateJob.php");
  });
  $("#newUser").click(function(){
    $("#contents").load("NewUser.php");
  });
    
  $("#ChangePwd").click(function(){
    $("#contents").load("chngpwd.php");
  });
  $("#UpdateRes").click(function(){
    $("#contents").load("AdmnJobResult.php");
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
	<a href="logout.php"><?php session_start();  echo $_SESSION['username'];?>&nbspLogout</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	</div>
	<div class="clearfix">
	<div class="left-menu">
		<div class="listItem"><a id="newJob" href="#"> Create a New Job</a></div>
		<div class="listItem"><a id="newUser" href="#"> Add a New user</a></div>
		<div class="listItem"><a id="ChangePwd" href="#">Change password</div>
		<div class="listItem"><a id="UpdateRes" href="#">Update Result</div>
	</div>
	
	<div class="dataform" ">
	<div class="form-data" id="contents" style=" box-shadow: 10px 10px lightgrey;">
	
	</div>
	</div>
	</div>
</div>

</body>
</html>
