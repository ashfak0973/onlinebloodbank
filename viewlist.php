<?php
include('connection.php');
$sql=mysql_query("SELECT * FROM `registration`");

$epr='';
$msg='';

if(isset($_GET['epr']))
	$epr=$_GET['epr'];

if($epr=='Delete')
{
	$email=$_GET['email'];
	$delete=mysql_query("DELETE from registration where email='$email'");
	if($delete)
	{
		header("location: viewlist.php");
	}
	else
		$msg='Erorr'.mysql_error();
		
}

if($epr=='Supdate')
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$bloodgroup=$_POST['bloodgroup'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	
	$a_sql=mysql_query("UPDATE registration SET name='$name',password='$password',email='$email',bloodgroup='$bloodgroup',gender='$gender',contact='$contact' WHERE email='$email' ");
	if($a_sql)
	header('location:viewlist.php');
else
	$msg='Error'.mysql_error();
}

if($epr=='donate')
{
	$email=$_GET['email'];
	
		
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

<body  id="page-top">

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
	<br/><br/><br/><br/><br/><br/>
	<form action="" method="POST">
	<input placeholder="Search by bloodgroup" name="term" ><input type="submit" value="Submit" name="search" />
	</form></center>
	<br/><br/><br/><br/>
	
	<?php
	if($epr=='Update')
	{
		$email=$_GET['email']; 
		$row=mysql_query("SELECT `name`, `email`, `password`, `bloodgroup`, `contact`, `gender` FROM `registration` where email='$email'");
		$st_row=mysql_fetch_array($row);
		
		?>
		<form method="post"  action="viewlist.php?epr=Supdate">
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
	<td>Password</td>
	<td><input type="text" name="email" value="<?php echo $st_row['email']?>"/></td>
	</tr>
	
	<tr>
	<td>Blood Group</td>
	<td><input type="text" name="bloodgroup" value="<?php echo $st_row['bloodgroup']?>"/></td>
	</tr>
	
	<tr>
	<td>Gender</td>
	<td><input type="text" name="gender" value="<?php echo $st_row['gender']?>"/></td>
	</tr>
	
	<tr>
	<td>Contact</td>
	<td><input type="text" name="contact" value="<?php echo $st_row['contact']?>"/></td>
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
	<td>Password</td>
	<td><input type="text" name="email" "/></td>
	</tr>
	
	<tr>
	<td>Blood Group</td>
	<td><input type="text" name="bloodgroup"/></td>
	</tr>
	
	<tr>
	<td>Gender</td>
	<td><input type="text" name="gender"/></td>
	</tr>
	
	<tr>
	<td>Contact</td>
	<td><input type="text" name="contact"/></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" name="submit"/></td>
	</tr>
	
	</table>
	</form>
		<?php
	}	?>
   
        <div ><br/><br/><br/>
	<u><center><h3 style="color:white;">User List <font color="white"></h3></center></u><br/><br/><br/>

<table align="center"  cellspacing="0" cellpadding="0" width="1200">
  <thead >
    <th align= "center" >Name</th>
	<th>E-mail</th>
	<th>Password</th>
    <th>Blood Group</th>
	 <th>gender</th>
    <th>Contact</th>
	<th>Controls</th>
  </thead>
  <?php
  
  if(isset($_POST['search']))
{
	if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql3 = "SELECT * FROM registration WHERE bloodgroup LIKE '%".$term."%'"; 
$r_query3 = mysql_query($sql3); 

while($row3=mysql_fetch_array($r_query3))
  {
	  echo "<tr>
	  <td>".$row3['name']."</td>
	  <td>".$row3['email']."</td>
	  <td>".$row3['password']."</td>
	  <td>".$row3['bloodgroup']."</td>
	  <td>".$row3['gender']."</td>
	  <td>".$row3['contact']."</td>
	  <td >
	  <a href='viewlist.php?epr=Delete&email=".$row3['email']."'>Delete</a>|
	  <a href='viewlist.php?epr=Update&email=".$row3['email']."'>Update</a>
	  </td>
	  </tr>";
  }
}
}
else
{  
  while($row=mysql_fetch_array($sql))
  {
	  echo "<tr>
	  <td>".$row['name']."</td>
	  <td>".$row['email']."</td>
	  <td>".$row['password']."</td>
	  <td>".$row['bloodgroup']."</td>
	  <td>".$row['gender']."</td>
	  <td>".$row['contact']."</td>
	  <td >
	  <a href='viewlist.php?epr=Delete&email=".$row['email']."'>Delete</a>|
	  <a href='viewlist.php?epr=Update&email=".$row['email']."'>Update</a></td>
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
    
 
</header>
    <br/>

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
