<?php

	
	$email= $_POST['email'];
	$bloodgroup= $_POST['bloodgroup'];
	$contact= $_POST['contact'];
	$nbags=$_POST['nbags'];
	//$mydate=$_POST['mydate'];
	
$connection=mysql_connect("localhost","root","");
mysql_select_db("test1");

if($email!="" &&  $bloodgroup!="" && $contact!="" && $nbags!="")

{
  
$query = "insert into request(email,bloodgroup,contact,nbags) values ('$_POST[email]','$_POST[bloodgroup]','$_POST[contact]','$_POST[nbags]')";

 $retval = mysql_query( $query, $connection );
   
   if(! $retval )
   {
      die('Could not enter data: ' . mysql_error());
   }
   else
   {
   header('Location: request.php');
   $a= "Request sent.\n";
   }
   mysql_close($connection);
   
}
else {
	header('Location: request.php');
echo "Fill all the fields";
}
?>