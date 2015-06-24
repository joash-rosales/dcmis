<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dental Care</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style type="text/css">
		.navbar-default {
			background: #a90351;
		}
		#logo {
			color: #fff;
		}
		#example {
			font-size: 14px;
		}
		#act {
			color: #a90351;
		}
		#blank {
			height: 100px;
		}
		#search {
			background-color: #333333;
			color: #fff;
		}
		.glyphicon-eye-open {
			color: #a90351;
			padding: 0px;
			margin: 0px;
		}
		.glyphicon-pencil {
			color: #a90351;
			padding: 0px;
			margin: 0px;
		}
		.glyphicon-trash {
			color: #a90351;
			padding: 0px;
			margin: 0px;
		}
		#tabletitle {
			text-align: center;
		}
		#names {
			text-align: center;
		}
		.thumbnail.right-caption > img {
    		float: left;
    		margin: 6px;
		}
		.btn-centered {
			background: #a90351;
			display: block;
			color: #fff;
		}
		#image {
			border-radius: 60px;
		}
		#thumbnail {
			background: #FF99C2;
		}
		body {
			background-color: #65b0ac;
		}
		#logo img{
			width: 130px;
			margin-top: -10px;
		}
		#act {
			color: #fff;
		}
		#unact {
			color: #ccc;
		}
		#unact:hover {
			color: #fff;
		}
		.navbar-inverse{
			height: 60px;
			vertical-align: middle;
		}
		.trans-gradient {
			border: none;;
		  	background: -moz-linear-gradient(bottom, rgba(0,60,57,1) 0%, rgba(109,70,41,0) 100%);
		  	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,60,57,1)), color-stop(100%,rgba(109,70,41,0)));
		 	background: -webkit-linear-gradient(bottom, rgba(0,60,57,1) 0%,rgba(109,70,41,0) 100%);
		  	background: -o-linear-gradient(bottom, rgba(0,60,57,1) 0%,rgba(109,70,41,0) 100%);
		  	background: -ms-linear-gradient(bottom, rgba(0,60,57,1) 0%,rgba(109,70,41,0) 100%);
		  	background: linear-gradient(to bottom, rgba(0,60,57,1) 0%,rgba(109,70,41,0) 100%);
		  	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ccc', endColorstr='#c91867',GradientType=1 );
		}
		#foot {
			color: #fff;
			background-color: #65b0ac;
			text-align: center;
			width: 100%;
		}
		.input-group {
			width: 294px;
			float: right;
			margin-bottom: 10px;
		}
	</style>



</head>

<body>

	<header>
		
		<!--NAVIGATION BAR-->
		<div class="navbar navbar-inverse trans-gradient navbar-fixed-top"> <!--navbar-fixed-top-->
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle"collapse" data-target"#example">
					</button>

					<!--LOGO-->
					<div class="navbar-brand" id="logo"><a href="Home.html"><img src="images/logo.png"></a></div>
				</div>

				<!--MENU-->
				<div class="collapse navbar-right navbar-collapse" id="example">
					<ul class="nav navbar-nav">
						<li><a href="Home.html" id="unact">Home</a></li>
						<li class="active"><a href="Patients.html" id="act">Patients</a></li>
						<li><a href="Schedules.html" id="unact"> Schedules</a></li>
						<li><a href="Inventory.html" id="unact">Inventory</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  id="unact"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="unact">
								<li><a href="">View Profile</a></li>
								<li><a href="">Edit Profile</a></li>
								<li><a href="">Settings</a></li>
								<li class="divider"></li>
								<li><a href="">Logout</a></li>
							</ul>
						</li>
					</ul>
						
				</div>
			</div>
		</div>

	</header>



	<div class="container" id="blank"></div>
	<div class="container">
		<a href="Addpatient.html" class="btn" id="search">Add new patient</a>

		<div class="input-group">
	      	<input type="text" class="form-control" placeholder="Search Patient">
	      	<span class="input-group-btn">
	        	<button class="btn" type="button" id="search"><span class="glyphicon glyphicon-search"></span></button>
	      	</span>
	    </div>
	</div>


		<!--TABLE FOR THE PATIENTS-->
		<div class="container">

			<div class="row">

			  	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/jo.JPG" id="image" alt="Joash">
			        		<h4><b>Joash Rosales</b></h4>
					        <small>Email: jo.rosales@gmail.com</small><br>
					        <small>Contact: 121212121212</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			   	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/me.JPG" id="image" alt="Aliza">
			        		<h4><b>Aliza Talibong</b></h4>
					        <small>Email: liz.talibong@gmail.com</small><br>
					        <small>Contact: 22222222222</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			   	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/ed.JPG" id="image" alt="Edwin">
			        		<h4><b>Edwin Cabatuan Jr.</b></h4>
					        <small>Email: ed.cabatuan@gmail.com</small><br>
					        <small>Contact: 333333334433</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			</div>

			<div class="row">

			  	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/ate.JPG" id="image" alt="Alix">
			        		<h4><b>Alix Talibong</b></h4>
					        <small>Email: alix.rt@gmail.com</small><br>
					        <small>Contact: 121212121212</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			   	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/ako.JPG" id="image" alt="Aliza">
			        		<h4><b>Aliza Talibong</b></h4>
					        <small>Email: liz.talibong@gmail.com</small><br>
					        <small>Contact: 2222222222</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			   	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/boloy.JPG" id="image" alt="Alexis">
			        		<h4><b>Alexis Talibong</b></h4>
					        <small>Email: alexis.rt@gmail.com</small><br>
					        <small>Contact: 333333334433</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			</div>


			<div class="row">

			  	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/hon.JPG" id="image" alt="Honey">
			        		<h4><b>Honey Grace Logdonio</b></h4>
					        <small>Email: honeyg.l@gmail.com</small><br>
					        <small>Contact: 121212121212</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			   	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/cy.JPG" id="image" alt="Jessa">
			        		<h4><b>Jessa Bation</b></h4>
					        <small>Email: cy.bat@gmail.com</small><br>
					        <small>Contact: 88888888888</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			   	<div class="col-md-4">
			    	<div class="thumbnail right-caption">
			      		<img src="images/zoie.JPG" id="image" alt="Zoie">
			        		<h4><b>Licel Zoie Ambi</b></h4>
					        <small>Email: zoie.amb@gmail.com</small><br>
					        <small>Contact: 333333334433</small><br>
					        <small>Address: Tibanga, Iligan City</small><br>
					        <br>
					        <center>
					        	<div class="btn-group btn-group-justified">
								  	<a href="Profile.html" class="btn btn-default">View/Edit</a>
								  	<a href="#" class="btn btn-default">Delete</a>
								</div>
					        </center>
			      	</div>
			   	</div>

			</div>

		</div>

			


			<nav>
				<center>
					<ul class="pagination">
					    <li class="disabled"><a href="#" aria-label="Previous">
					    	<span aria-hidden="true">&laquo;</span></a>
					    </li>
					    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					    <li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li><a href="#" aria-label="Next">
						    <span aria-hidden="true">&raquo;</span>
						    </a>
						</li>
					</ul>
			  	</center>
			</nav>











		<!--<div class="container">	
				<div class="dropdown">
					<button href="" class="btn btn-link navbar-right dropdown-toggle" id="user" type="button" data-toggle="dropdown">
						Administrator <span class="caret"></span>
					</button>

					<ul class="dropdown-menu">
						<li><a href="">View Profile</a></li>
						<li><a href="">Edit Profile</a></li>
						<li><a href="">Logout</a></li>
					</ul>
				</div>
			</div>
		-->

	<footer>
		<div class="container" id="foot">	
			<hr>
				<p> <small>DENTALCARE&nbsp;&nbsp;.&nbsp;&nbsp;All Rights Reserved&nbsp;&nbsp;.&nbsp;&nbsp;
				<u>Administrator@gmail.com</u>&nbsp;&nbsp;.&nbsp;&nbsp;
				Version 1 : July 2015</small>
				</p>
			</div>
		</div>
	</footer>
		
	




	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/id.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/locales/en-ca.js" charset="UTF-8"></script>
    

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
			    locale: 'en-ca'
			});
        });
    </script>

    <script type="text/javascript">
      	$(function () {
          	$('#datetimepicker3').datetimepicker({
              	format: 'LT'
          	});
      	});
    </script>
</body>	
</html>