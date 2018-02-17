<?php

	$bloodgroup= $_POST['bloodgroup'];
	$term=$_POST['term'];
	
$connection=mysql_connect("localhost","root","");
mysql_select_db("test1");

if($term!="")

{
  
$query = "select * from beadonor where bloodgroup='$bloodgroup'";
 $retval = mysql_query( $query, $connection );
   
   if(! $retval )
   {
      die('Could not enter data: ' . mysql_error());
   }
   else
   {
   <table align="center" border="5" cellspacing="0" cellpadding="0" width="1000">
  <thead >
    <th align= "center" >Name</th>
	<th>E-mail</th>
    <th>Blood Group</th>
	<th>Last Donation Date</th>
    <th>Contact</th>
	<th>Location</th>
	 <th>gender</th>
	<th>Controls</th>
  </thead>
  <?php
  while($row=mysql_fetch_array($sql))
  {
	  echo "<tr>
	  <td>".$row['name']."</td>
	  <td>".$row['email']."</td>
	  <td>".$row['bloodgroup']."</td>
	  <td>".$row['lastdonation']."</td>
	  <td>".$row['contact']."</td>
	  <td>".$row['location']."</td>
	  <td>".$row['gender']."</td>
	  <td >
	  <a href='alldonor.php?epr=Delete&email=".$row['email']."'>Delete</a>|
	  <a href='alldonor.php?epr=Update&email=".$row['email']."'>Update</a>|
	  <a href='alldonor.php?epr=donate&email=".$row['email']."'>Donate</a></td>
	  </tr>";
  }
  ?>

</table>
   }
   mysql_close($connection);
   
}
else {
 echo "Enter Blood Group";
}
?>