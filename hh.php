 <?php
if($_POST)
{
	$a=$_POST['patientname'];
	$b=$_POST['doctorname'];
	$c=$_POST['date'];
	$d=$_POST['gender'];
	$e=$_POST['age'];
	$f=$_POST['height'];
	$g=$_POST['specialist'];
	$h=$_POST['pstatus'];
	$i=$_POST['pproblem'];
	$j=$_POST['prescription'];
	$k=$_POST['surgery'];
	$l=$_POST['nextvisit'];
	$m=$_POST['username'];
	$n=$_POST['password'];
	//echo"$a","$b","$c","$d","$e","$f","$g","$h","$i","$j","$k","$l";
	$con=mysql_connect("localhost","root","");
	mysql_select_db("mydbb");
	$query="insert into register value('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
	$result=mysql_query($query);
	mysql_close($con);
}
?>
 <html>
<head>
<link rel ="stylesheet"href="hwm.css"/>
</head>
<body>
<h1><center>PATIENT REGISTRATION FORM</center></h1>
<br>
<b align="right">
<form action="lo.php">
<input type="submit"value="LOGIN"/>
</form>
</b>
<form> 
PATIENT NAME: <input type="text"> <br><br>
DOCTOR'S NAME: <input type="text"> <br><br>
DATE: <input type="date"> <br><br>

GENDER: <input type="text"> <br><br>
AGE: <input type="number"> <br><br>
HEIGHT & WEIGHT: <input type="number"> <br><br>
SPECIALIST : <select name="dropdown">
<option value="cardiology">Cardiology</option>
<option value="general">General</option>
<option value="paediatrics">Paediatrics</option>
<option value="oncology">Oncology</option>
<option value="gynacology">Gynacology</option>
</select>
<br><br>
PATIENT STATUS: <select name="dropdown">
<option value="in"> In-Patient </option>
<option value="out"> Out-Patient </option>
</select><br> <br>
PATIENT'S PROBLEMS:<br><br><textarea id="prob" name="problem" placeholder="Enter here..."></textarea>
<br><br>
PRESCRIPTION: <input type="text"> <br><br>
SURGERY: <input type="radio" value="yes"> YES
         <input type="radio" value="no"> NO
<br><br>
NEXT VISIT: <input type="date">
<br> <br>
USERNAME: <input type="text"> <br><br>
PASSWORD: <input type="text"> <br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
