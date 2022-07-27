<?php

 if (!isset($_SESSION['username'])) {
			header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="detail.css">
</head>

<body>
<!--header-->
	<div class="container-fluid top_bar" style="height: 45px;margin-bottom: 5px">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-right" >
					<form action="logout.php" method="POST"><button type="submit" name="logout" class="logout-btn"><span class="glyphicon glyphicon-log-out"></span>  Logout</button> </form>
				</div>
				<div class="col-sm-8 login text-right" >
					<!--<span class="glyphicon glyphicon-log-in"></span> <a href="login.html"> Login</a> | <a href="register.html"><span class="glyphicon glyphicon-user"></span> Register</a>-->
				</div>

				<div class="col-sm-4 contact_info text-right" >
					<!--<span class="glyphicon glyphicon-envelope"></span>  suraj.ghuge@gmail.com,
					<span class="glyphicon glyphicon-earphone"></span>  +91-7208883616-->
				</div>

				
			</div>
		</div>
		

	</div>
<!--end of header-->

<!--navigation bar-->

<div class="container-fluid"  >

		<div class="container">
		<div class="row">
			<div class="col-sm-5" >
				<a href="index.html"><img src="images/digi_voting.png" width="110px" height="100px"></a>
			</div>

			<div class="col-sm-7 nav_menu ">

			 <nav class="nav navbar-default">

				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<!--<li><a href="recharge.html"><span class="glyphicon glyphicon-credit-card"></span> Recharge</a></li>
					<li><a href="news.html"><span class="glyphicon glyphicon-list-alt"></span> News</a></li>
					<li><a href="maps.html"><span class="glyphicon glyphicon-map-marker"></span> Maps</a></li>-->
					<li><a href="team-detail.html"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
						<!--<ul class="dropdown-menu">
					      <li><a href="team.html">Our Team</a></li>
					      <li><a href="#">Team details</a></li>
   						</ul>-->
					</li>
				</ul>

		     </nav>

		    </div>
		</div>
	</div>
</div>
<!--navigation bar-->


<!--details-->
<?php



$servername= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "rfid";



mysqli_connect($servername,$dbusername,$dbpassword);
mysqli_select_db($conn,$dbname);

$email = mysqli_real_escape_string($conn,$_SESSION['username']);
$sql ="SELECT * FROM user INNER JOIN pubpriv ON user.id=pubpriv.id WHERE user.email ='$email'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_NUM)

//$result = $conn->query($sql);
//$row = mysqli_fetch_array($conn,$result);	


?>	


	<div class="container-fluid back">
		<div class="container">
			<div class="col-sm-4 det-container" style="border:1px solid white">
				<center><h2>User Details</h2></center>
					<p><b>Name &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	:	&nbsp;	&nbsp; <?php echo $row [1]; ?>&nbsp;		<?php echo $row [2]; ?></b><br></p>
					<p><b>Gender &nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;		:	&nbsp;	&nbsp; <?php echo $row [7]; ?></b><br></p>
					<p><b>Date of birth :	&nbsp;	&nbsp; <?php echo $row [6]; ?></b><br></p>
					<p><b>Email &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;			:	&nbsp;	&nbsp; <?php echo $row [3]; ?></b><br></p>
					<p><b>Contact no. 	&nbsp;&nbsp;:	&nbsp;	&nbsp; <?php echo $row [4]; ?></b><br></p>
					<p><b>Private Key 	&nbsp;&nbsp;:	&nbsp;	&nbsp; <?php echo $row [9]; ?></b><br></p>

					<!--<p><b>Card no. 	&nbsp;	&nbsp;	&nbsp;	&nbsp;:	&nbsp;	&nbsp; <?php echo $row ['rfid']; ?></b><br></p>
					<p><b>Balance 	&nbsp;	&nbsp;	&nbsp;	&nbsp;		:	&nbsp;	&nbsp; <?php echo $row ['balance']; ?></b><br></p>-->



			</div>


			
			</div>
	</div>


	
<!--details-->

<!--footer-->
	<div class="container-fluid footer">
		<div class="container">
			<div class="col-sm-4">
				<center><img src="images/digi_voting_light.png" width="150px" height="140px"></center>
				<center><p><h4>Digi-Voting</h4></p></center>
			</div>
			<div class="col-sm-4">
				<h3>Quick links</h3>
				<ul>
					<li><a href="index.html">&raquo; Home</a></li>
					<li><a href="login.html">&raquo; Login</a></li>
					<li><a href="register.html">&raquo; Register</a></li>
					<li><a href="">&raquo; About us</a></li>
				</ul>
			</div>

			<div class="col-sm-4">
				<h3>Contact details</h3>
				<p><strong>Address : </strong>Vidyalankar Institute of Technology,Wadala(E),Mumbai - 400037</p>
				<p><strong>Email : </strong>suraj.ghuge@gmail.com</p>
				<p><strong>Phone : </strong>+91-7208883616</p>
			</div>
		</div>
	</div>

<!--footer-->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		})
	</script>
</body>
</html>