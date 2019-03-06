<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nandyalgram</title>
</head>

<body bgcolor="#993399">
<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "nandyal_gram";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$ward=$_POST['ward'];
$gender=$_POST['gender'];

$conn = mysqli_connect("localhost","root","");
mysql_select_db("nandyal_gram");



$sql="insert into registration_user values('$fname','$lname','$email','$password','$dob','$ward','$gender')";

$result=mysql_query($sql);

if(!$result)
{
	print("<script language='javascript' type='text/javascript'> alert('Please fill the form properly !!!!!!!!'); </script>");
	
}
else
{
	print("<script language='javascript' type='text/javascript'> alert('Thank you for your Registration!!!!!!!!'); </script>");

	header("location:index.html");
}
	
?>
</body>
</html>
