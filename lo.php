<?php
if($_POST)
{	
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("mydbb");
$sql="select * from register where user='".$username."'AND Pass='".$password."'limit 1";
$result=mysql_query($sql);
if(mysql_num_rows($result)==1){
echo" You Have Successfully Logged in";
exit();
}
else{
echo"You Have Entered Incorrect Password";
exit();
}
}
?>
<html>
<head>
<title>Form in Design</title>
<link rel ="stylesheet"href="sty.css"/>
</head>
<body>
<div class="container">
<img src="log.jfif"/>
<form method="$_POST" action="#">
<div class="form_input">
<input type="text" name="username"placeholder="Enter Your User Name"/><br>
</div>
<div class="form_input">
<input type="password" name="password" placeholder="Enter Your Password"/>
</div>
<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
</form>
</div>
</body>
</html>