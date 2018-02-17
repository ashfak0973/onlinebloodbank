<?php
	$username= $_POST['user'];
	$password= $_POST['pass'];
mysql_connect("localhost","root","");
mysql_select_db("test1");
$result= mysql_query("select * from registration where email='$username' and password='$password'");
$row= mysql_fetch_array($result);
if($username=="" || $password=="")
{	echo "Fill all the fields";
}
else if($username=='ashfak0973@gmail.com')
{	if($row['email']== $username && $row['password']== $password)
{		header('Location: adminhome.php');  
}
}
else if($row['email']== $username && $row['password']== $password)
{		header('Location: homeafterlogin.php');  
}
else
{	echo "Login failed";
	header('Location: login.php');
}
?>