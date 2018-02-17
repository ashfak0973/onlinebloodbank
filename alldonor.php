<?php
include('connection.php');
$sql=mysql_query("SELECT `name`, `email`, `bloodgroup`,`lastdonation` ,`contact`,`location`, `gender` FROM `beadonor`");

$epr='';
$msg='';
$today1='';
$next;
if(isset($_GET['epr']))
	$epr=$_GET['epr'];

if($epr=='Delete')
{
	$email=$_GET['email'];
	$delete=mysql_query("DELETE from beadonor where email='$email'");
	if($delete)
	{
		header("location: alldonor.php");
	}
	else
		$msg='Erorr'.mysql_error();
		
}

if($epr=='Supdate')
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$bloodgroup=$_POST['bloodgroup'];
	$lastdonation=$_POST['lastdonation'];
	$contact=$_POST['contact'];
	$location=$_POST['location'];
	$gender=$_POST['gender'];
	
	
	$a_sql=mysql_query("UPDATE beadonor SET name='$name',email='$email',bloodgroup='$bloodgroup',lastdonation='$lastdonation',gender='$gender',location='$location',contact='$contact' WHERE email='$email' ");
	if($a_sql)
	header('location:alldonor.php');
else
	$msg='Error'.mysql_error();
}

if($epr=='donate')
{
	
	$email=$_GET['email'];
	$sql1=mysql_query("SELECT `name`, `email`, `bloodgroup`,`lastdonation` ,`contact`,`location`, `gender` FROM `beadonor` WHERE email='$email' ");
	while($row1=mysql_fetch_array($sql1))
  {
	  $lastdonation=$row1['lastdonation'];
  }
  
	$today1 = date("y-m-d"); 
	
	
	$today = date("Y-m-d", strtotime("-3 months"));
	
	$lastdonation = date("Y-m-d", strtotime("$lastdonation"));
	
	
	if($lastdonation<=$today)
	{
		$next=0;
	mysql_query("UPDATE beadonor SET nextdonation='$next',lastdonation='$today1' WHERE email='$email' ");
	
	header("location: alldonor.php");
	
	}
	
	else
	{
		$next=1;
		mysql_query("UPDATE beadonor SET nextdonation='$next' WHERE email='$email' ");
		
		header("location: alldonor.php");
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome!</title>

    <!-- Bootstrap Core CSS -->
	<link href="login.css" rel="stylesheet" type="text/css" />
	<link href="D:\mystartbootstrap-new-age-gh-pages\css\login.css" rel="stylesheet" type="text/css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body   id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a  href="adminhome.php">Home</a>
                    </li>
					<li>
                        <a  href="login.php">Log out</a>
                    </li>
                    <li>
                        <a href="viewlist.php">Control User List</a>
                    </li>
					<li>
                        <a href="alldonor.php">Control Donor List</a>
                    </li>
					<li>
                        <a href="admindonorrequest.php">Control Donation Requests</a>
                    </li>
					<li>
                        <a href="adminallreq.php">Control Blood Requests</a>
                    </li>
                    <li>
                        <a href="admincontact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<header>
    
        <div class="container">
            <div class="row">
	
	
	
	<center>
	<br/><br/><br/>
	<form action="" method="POST" class="login">
	<input placeholder="Search by blood group" name="term" ><input type="submit" value="Search" name="search" />
	</form>
	</center>
	<br/><br/><br/>
	
	<?php
	if($epr=='Update')
	{
		$email=$_GET['email']; 
		$row=mysql_query("SELECT `name`, `email`, `bloodgroup`, `lastdonation`,`contact`, `location`,`gender` FROM `beadonor` where email='$email'");
		$st_row=mysql_fetch_array($row);
		
		?>
		<form method="post"  action="alldonor.php?epr=Supdate">
	<table align="center">
	<tr>
	<td>Name</td>
	<td><input type="text" name="name" value="<?php echo $st_row['name']?>"/></td>
	</tr>
	
	<tr>
	<td>Email</td>
	<td><input type="text" name="email" value="<?php echo $st_row['email']?>"/></td>
	</tr>
	
	<tr>
	<td>Blood Group</td>
	<td><input type="text" name="bloodgroup" value="<?php echo $st_row['bloodgroup']?>"/></td>
	</tr>
	
	<tr>
	<td>Last donation</td>
	<td><input type="text" name="lastdonation" value="<?php echo $st_row['lastdonation']?>"/></td>
	</tr>
	
	<tr>
	<td>Contact</td>
	<td><input type="text" name="contact" value="<?php echo $st_row['contact']?>"/></td>
	</tr>
	
	<tr>
	<td>Location</td>
	<td><input type="text" name="location" value="<?php echo $st_row['location']?>"/></td>
	</tr>
	
	<tr>
	<td>Gender</td>
	<td><input type="text" name="gender" value="<?php echo $st_row['gender']?>"/></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" name="submit"/></td>
	</tr>
	
	</table>
	</form>
		<?php
	}
	else
	{
		?>
	
	<form method="post" >
	<table align="center">
	<tr>
	<td>Name</td>
	<td><input type="text" name="name"/></td>
	</tr>
	
	<tr>
	<td>Email</td>
	<td><input type="text" name="email"/></td>
	</tr>
	
	<tr>
	<td>Blood Group</td>
	<td><input type="text" name="bloodgroup"/></td>
	</tr>
	
	<tr>
	<td>Last donation</td>
	<td><input type="text" name="lastdonation" "/></td>
	</tr>
	
	<tr>
	<td>Contact</td>
	<td><input type="text" name="contact"/></td>
	</tr>
	
	<tr>
	<td>Location</td>
	<td><input type="text" name="location"/></td>
	</tr>
	
	<tr>
	<td>Gender</td>
	<td><input type="text" name="gender"/></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" name="submit"/></td>
	</tr>
	
	</table>
	</form>
		<?php
	}	?>
   </br></br>
        <div ><br/><br/><br/>
	<u><center><h3 style="color:white;">All Donor List <font color="white"></h3></center></u><br/><br/><br/>

<table align="center"  cellspacing="20" cellpadding="20" width="1200" >
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
if(isset($_POST['search']))
{
	if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql3 = "SELECT * FROM beadonor WHERE bloodgroup LIKE '%".$term."%'"; 
$r_query3 = mysql_query($sql3); 

while ($row3 = mysql_fetch_array($r_query3))
  {
	  echo "<tr>
	  <td>".$row3['name']."</td>
	  <td>".$row3['email']."</td>
	  <td>".$row3['bloodgroup']."</td>
	  <td>".$row3['lastdonation']."</td>
	  <td>".$row3['contact']."</td>
	  <td>".$row3['location']."</td>
	  <td>".$row3['gender']."</td>
	  <td >
	  <a href='alldonor.php?epr=Delete&email=".$row3['email']."'>Delete</a>|
	  <a href='alldonor.php?epr=Update&email=".$row3['email']."'>Update</a>|
	  <a href='alldonor.php?epr=donate&email=".$row3['email']."'>Donate</a></td>
	  </tr>";
  }

 
   mysql_close($connection);
   
}
else {
 echo "Enter Blood Group";
}
}

else {
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
}
  ?>

</table>
<?php echo $msg;?>
<br/><br/><br/>

	</div>
    
</div>
        </div>
 <br/><br/><br/><br/><br/><br/>
</header>
    

    <footer>
        <div class="container">
            <p>All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>

</html>
