<?php
include('connection.php');
$sql=mysql_query("SELECT  `email`, `bloodgroup`, `contact`, `nbags` FROM `request`");

$epr='';
$msg='';

if(isset($_GET['epr']))
	$epr=$_GET['epr'];

if($epr=='Delete')
{
	$email=$_GET['email'];
	$delete=mysql_query("DELETE from donorrequest where email='$email'");
	if($delete)
	{
		header("location: alldonor.php");
	}
	else
		$msg='Erorr'.mysql_error();
		
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

<body  bgcolor="#1E2253">

    <nav >
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
                        <a  href="homeafterlogin.php">Home</a>
                    </li>
					<li>
                        <a  href="login.php">Logout</a>
                    </li>
					<li>
                        <a  href="request.php">Send Request</a>
                    </li>
					<li>
                        <a  href="albeadonor.php">Be a donor</a>
                    </li>
                    <li>
                        <a href="viewlistforuser.php">All Donor LIst</a>
                    </li>
					<li>
                        <a href="alavailabledonor.php">Available Donor LIst</a>
                    </li>
					<li>
                        <a  href="previousrequestforuser1.php">All blood requests</a>
                    </li>
                    <li>
                        <a href="alcontact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<center>
	<br/><br/><br/>
	<form action="" method="POST">
	<input placeholder="Search by blood group" name="term" ><input type="submit" value="Submit" name="search" />
	</form> </center>
	<br/><br/><br/>


        <div >
	<center><h3 style="color:green;">All Blood Requests<font color="red"></h3></center>

<div >  <table align="center" border="5" cellspacing="0" cellpadding="0" width="1000" >
  <thead >
	<th align= "center" >E-mail</th>
    <th>Blood Group</th>
    <th>Contact</th>
	<th>Number of bags</th>
	<th>Action</th>
  </thead>
  <?php
  
   if(isset($_POST['search']))
{
	if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql3 = "SELECT * FROM request WHERE bloodgroup LIKE '%".$term."%'"; 
$r_query3 = mysql_query($sql3); 
   while($row3=mysql_fetch_array($r_query3))
   {
	   echo "<tr>
	  <td>".$row3['email']."</td>
	  <td>".$row3['bloodgroup']."</td>
	  <td>".$row3['contact']."</td>
	  <td>".$row3['nbags']."</td>
	  <td >
	  
	  <a href='previousrequestforuser1.php?epr=delete&email=".$row3['email']."'>Donate</a></td>
	  </tr>";
   }
	}
}

else { 
  while($row=mysql_fetch_array($sql))
  {
	  echo "<tr>
	  <td>".$row['email']."</td>
	  <td>".$row['bloodgroup']."</td>
	  <td>".$row['contact']."</td>
	  <td>".$row['nbags']."</td>
	  <td >
	  
	  <a href='previousrequestforuser1.php?epr=delete&email=".$row['email']."'>Donate</a></td>
	  </tr>";
  }
}
  ?>

</table>
<?php echo $msg;?></div>
<?php echo $msg;?>
<br/><br/><br/>

	</div>
    

    

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