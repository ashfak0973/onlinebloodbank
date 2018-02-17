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

<body id="page-top">

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
                        <a  href="home.php">Home</a>
                    </li>
					<li>
                        <a  href="login.php">Login</a>
                    </li>
					<li>
                        <a  href="registration.php">Registration</a>
                    </li>
					<li>
                        <a  href="beadonor.php">Be a donor</a>
                    </li>
                    <li>
                        <a href="wlviewlistforuser.php">All donor list</a>
                    </li>
					<li>
                        <a href="availabledonor.php">Availabe donor list</a>
                    </li>
					<li>
                        <a  href="wlpreviousrequestforuser1.php">All blood requests</a>
                    </li>
                    <li>
                        <a href="wlcontact.php">Contact</a>
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
                <div >
                    <div >
                        <div >
                            </br></br></br></br></br><center><h3 style= "font-size: 40px;color: #0d254c";>REGISTRATION</h3></center>
							
					<form action="registrationprocess.php" method="POST">
					<center><div class="login">
 <input type="text" placeholder="Name" id="username" name="user"> 
    <input type="text" placeholder="E-mail" id="email" name="email">  
  <input type="password" placeholder="password" id="password" name="password"> 
<input type="text" placeholder="Blood Group" id="blood" name="blood">
<input type="text" placeholder="Contact" id="contact" name="contact">
<input type="text" placeholder="Location" id="location" name="location">
  <br><br><center><p6>Gender:</p6><br><br>
  <input type="radio" name="gndr" value="male"> Male
  <input type="radio" name="gndr" value="female"> Female
  <input type="radio" name="gndr" value="other"> Other </center> <br>
  <a href="login.php" class="forgot">Already a member?</a>
  
  <input type="submit" value="Sign Up">
  
  
</div></center>
</form></br></br></br></br></br>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
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
