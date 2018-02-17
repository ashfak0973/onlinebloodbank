<?php

	$user= $_POST['user'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$blood= $_POST['blood'];
	$lastdonation= $_POST['lastdonation'];
	$contact= $_POST['contact'];
	$gndr=$_POST['gndr'];
	$location=$_POST['location'];
	$today = date("Y-m-d", strtotime("-3 months"));
	
	$lastdonation = date("Y-m-d", strtotime("$lastdonation"));
	
	if($lastdonation<=$today)
	{
		$next=1;
	}
		else
		{
			$next=0;
		}
	
$connection=mysql_connect("localhost","root","");
mysql_select_db("test1");

if($user!=""&& $email!="" && $password!="" && $blood!="" && $contact!="" && $gndr!="" && $location!="")

{
  
$query = "insert into beadonor(name,email,password,bloodgroup,lastdonation,nextdonation,contact,location,gender) values ('$_POST[user]','$_POST[email]','$_POST[password]','$_POST[blood]','$_POST[lastdonation]','$next','$_POST[contact]','$_POST[location]','$_POST[gndr]')";

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

}
?>