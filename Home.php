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
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

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
		#example {
			font-size: 14px;
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
		.widewrapper {
			width: 100%;
		}
		.widewrapper img{
			width: 100%;
		}
		.navbar-inverse{
			height: 60px;
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
		#blank {
			height: 200px;
		}
		#search {
			background-color: #333333;
			color: #fff;
		}

	</style>



</head>

<body>

	<header>
		
		<!--NAVIGATION BAR-->
		<nav class="navbar navbar-inverse trans-gradient navbar-fixed-top" role="navigation"> <!--navbar-fixed-top-->
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle"collapse" data-target"#example">
					</button>

					<!--LOGO-->
					<div class="navbar-brand" id="logo"><a href="Home.html"><img src="images/logo.png"></a></div>
				</div>

				<!--MENU-->
				<div class="collapse navbar-right navbar-inner navbar-collapse" id="example">
					<ul class="nav navbar-nav">
						<li class="active"><a href="Home.html" id="act">Home</a></li>
						<li><a href="Patients.html" id="unact">Patients</a></li>
						<li><a href="Schedules.html" id="unact">Schedules</a></li>
						<li><a href="Inventory.html" id="unact">Inventory</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="unact"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
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
		</nav>

	</header>

	<div class="widewrapper main">

		<img src="images/backdrop11.jpg">

	</div>






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