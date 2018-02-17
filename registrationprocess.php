<?php

	$user= $_POST['user'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$blood= $_POST['blood'];
	$contact= $_POST['contact'];
	$gndr=$_POST['gndr'];
	$location=$_POST['location'];
	
$connection=mysql_connect("localhost","root","");
mysql_select_db("test1");

if($user!=""&& $email!="" && $password!="" && $blood!="" && $contact!="" && $gndr!="" && $location!="")

{
  
$query = "insert into registration(name,email,password,bloodgroup,contact,location,gender) values ('$_POST[user]','$_POST[email]','$_POST[password]','$_POST[blood]','$_POST[contact]','$_POST[location]','$_POST[gndr]')";
//$query = "insert into list(name,email,bloodgroup,contact,gender) values ('$_POST[user]','$_POST[email]','$_POST[blood]','$_POST[contact]','$_POST[gndr]')";
 $retval = mysql_query( $query, $connection );
   
   if(! $retval )
   {
      die('Could not enter data: ' . mysql_error());
   }
   else
   {
   header('Location: login.php');
   $a= "Registration is completed.\n";
   }
   mysql_close($connection);
   
}
else {
echo "Fill all the fields";
}
?>