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
		#logo {
			color: #fff;
		}
		#example {
			font-size: 12px;
		}
		#act {
			color: #a90351;
		}
		#blank {
			height: 80px;
		}
		#search {
			background-color: #333333;
			color: #fff;
			margin-bottom: 10px;
		}
		.dropdown {
			position: relative;
		}
		#photo {
			display: block;
		}
		#image {
			padding-top: 6px;
		}
		#image1 {
			height: 488px;
		}
		#space {
			margin-left: -20px;
			margin-top: -2px;
		}
		#thumbnail1 {
			height: 258px;
		}
		#thumbnail2 {
			height: 500px;
		}
		#spacing {
			margin-top: -8px;
		}
		#tabletitle {
			text-align: center;
		}
		.table {
			background-color: #fff;
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
		#widewrapper {
			background-color: #c91868;
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="unact"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="">View Profile</a></li>
								<li><a href="">Edit Profile</a></li>
								<li><a href="">Settings</a></li>
								<li class="divider"></li>
								<li><a href="">Logout</a></li>
							</ul>
						</li>


					</ul>
						
						<!--DROPDOWN USER ACCOUNT
						<li><button class="btn btn-link" id="unact" type="button"> Administrator <span class="caret"></span></button></li>

						
						<ul class="dropdown-menu">
							<li><a href="">View Profile</a></li>
							<li><a href="">Edit Profile</a></li>
							<li><a href="">Logout</a></li>
						</ul>-->
					
				</div>
			</div>
		</div>

	</header>
<!--DROPDOWN USER ACCOUNT
	<div class="jumbotron" id="blank"></div>
-->


<div class="container" id="blank"></div>
<div class="container">
	<a href="Patients.html" class="btn" id="search">Back</a>&nbsp;&nbsp;&nbsp;
	<a href="Edit.html" class="btn" id="search">Edit Profile</a>

	<div class="row">

	  	<div class="col-md-3">
	    	<div class="thumbnail" id="thumbnail1">
	      		<img src="images/jo2.jpg" alt="Joash" id="image">
	    	</div>
	  	</div>

	  	<div class="col-md-9">

		  	<div class="col-md-4" id="space">
		    	<div class="form-group form-group-sm">
					<label for="name1">Name:</label>
					<input type="text" id="name1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-5" id="space">
		    	<div class="form-group form-group-sm">
					<label for="address1">Home Address:</label>
					<input type="text" id="address1" class="form-control" value="Santiago, Iligan City, Lanao del Norte" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-3" id="space">
		    	<div class="form-group form-group-sm">
					<label for="tel1">Telephone:</label>
					<input type="text" id="tel1" class="form-control" value="223-123-111" readonly="true">
				</div>
		  	</div>




		  	<div class="col-md-2" id="space">
		    	<div class="form-group form-group-sm">
					<label for="age1">Age:</label>
					<input type="text" id="age1" class="form-control"  value="22" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-2" id="space">
		    	<div class="form-group form-group-sm">
					<label for="sex1">Sex:</label>
					<input type="text" id="sex1" class="form-control"  value="Male" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-3" id="space">
		    	<div class="form-group form-group-sm">
					<label for="ms1">Marital Status:</label>
					<input type="text" id="ms1" class="form-control" value="Single" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-3" id="space">
		    	<div class="form-group form-group-sm">
					<label for="occ1">Occupation:</label>
					<input type="text" id="occ1" class="form-control" value="Student" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-3" id="space">
		    	<div class="form-group form-group-sm">
					<label for="cel1">Cellphone:</label>
					<input type="text" id="cel1" class="form-control" value="08123216642" readonly="true">
				</div>
		  	</div>




		  	<div class="col-md-9" id="space">
		    	<div class="form-group form-group-sm">
					<label for="oa1">Office Address:</label>
					<input type="text" id="oa1" class="form-control" value="Bigbytes, G8, IIT, Gamers, Tibanga, Iligan City" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-3" id="space">
		    	<div class="form-group form-group-sm">
					<label for="ot1">Office Telephone:</label>
					<input type="text" id="ot1" class="form-control" value="221-122-833" readonly="true">
				</div>
		  	</div>





		  	<div class="col-md-12" id="space">
		    	<div class="form-group form-group-sm">
					<label for="com1">Complaint:</label>
					<input type="text" id="com1" class="form-control" value="Gasakit iyang ulo, Galabad iyang bagtak. Gahubag iyang mata, Gakatol iyang ilong. Don't go full retard kuya." readonly="true">
				</div>
		  	</div>

		</div>

	</div>
</div>


<div class="container">
	<div class="row" id="leftspace">


		<div class="col-md-5">

	    	<div class="col-md-6">
		    	<div class="form-group form-group-sm">
					<label for="oh1">Oral Hygiene:</label>
					<input type="text" id="oh1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6">
		    	<div class="form-group form-group-sm">
					<label for="pc1">Periodontal Condition:</label>
					<input type="text" id="pc1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-4" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="dent1">Denture:</label>
				</div>
		  	</div>

		  	<div class="col-md-4" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="upD1">Upper:</label>
					<input type="text" id="upD1" class="form-control" value="None" readonly="true">
				</div>
				<div class="form-group form-group-sm">
					<label for="sUp1">Since:</label>
					<input type="text" id="sUp1" class="form-control" value="None" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-4" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="lowD1">Lower:</label>
					<input type="text" id="lowD1" class="form-control" value="None" readonly="true">
				</div>
				<div class="form-group form-group-sm">
					<label for="sLow1">Since:</label>
					<input type="text" id="sLow1" class="form-control" value="None" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="ano1">Anomalies:</label>
					<input type="text" id="ano1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="gc1">Gen. Conditions:</label>
					<input type="text" id="gc1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="phy1">Physician:</label>
					<input type="text" id="phy1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="not1">Nature of Treatment:</label>
					<input type="text" id="not1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="all1">Allergies:</label>
					<input type="text" id="all1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="hob1">History of Bleeding:</label>
					<input type="text" id="hob1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="ca1">Chronic Ailments:</label>
					<input type="text" id="ca1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-6" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="bp1">Blood Pressure:</label>
					<input type="text" id="bp1" class="form-control" value="Joash Rosales" readonly="true">
				</div>
		  	</div>

		  	<div class="col-md-12" id="spacing">
		    	<div class="form-group form-group-sm">
					<label for="dbt1">Drugs being taken:</label>
					<input type="text" id="dbt1" class="form-control" value="Caffeine, Paracetamol, Biogesic, Bioflu, Neozep" readonly="true">
				</div>
		  	</div>
	  	</div>


	  	<div class="col-md-7">
	    	<div class="thumbnail" id="thumbnail2">
	      		<img src="images/tee1.jpg" alt="Add Photo" id="image1">
	    	</div>
	  	</div>

	</div>
</div>

<hr>

<!--TABLE FOR THE TRANSACTIONS OF THE PATIENT-->
		<div class="container">
			<table class="table table-striped table-bordered">
				<tr id="tabletitle">
					<td><b>Date</b></td>
					<td><b>Diagnosis</b></td>
					<td><b>Treatment Rendered</b></td>
					<td><b>Fee</b></td>
					<td><b>Paid</b></td>
					<td><b>Balance</b></td>
				</tr>

				<tr id="names">
					<td>02/13/14 4:00PM</td>
					<td>SAKIT IYANG ULO HAHAHA</td>
					<td>Tooth Extraction</td>
					<td>6000.00</td>
					<td>4000.00</td>
					<td>2000.00</td>
				</tr>

				<tr id="names">
					<td>02/13/14 4:00PM</td>
					<td>SAKIT IYANG ULO HAHAHA</td>
					<td>Tooth Extraction</td>
					<td>6000.00</td>
					<td>4000.00</td>
					<td>2000.00</td>
				</tr>

				<tr id="names">
					<td>02/13/14 4:00PM</td>
					<td>SAKIT IYANG ULO HAHAHA</td>
					<td>Tooth Extraction</td>
					<td>6000.00</td>
					<td>4000.00</td>
					<td>2000.00</td>
				</tr>

				<tr id="names">
					<td>02/13/14 4:00PM</td>
					<td>SAKIT IYANG ULO HAHAHA</td>
					<td>Tooth Extraction</td>
					<td>6000.00</td>
					<td>4000.00</td>
					<td>2000.00</td>
				</tr>

				<tr id="names">
					<td>02/13/14 4:00PM</td>
					<td>SAKIT IYANG ULO HAHAHA</td>
					<td>Tooth Extraction</td>
					<td>6000.00</td>
					<td>4000.00</td>
					<td>2000.00</td>
				</tr>

				<tr id="names">
					<td>02/13/14 4:00PM</td>
					<td>SAKIT IYANG ULO HAHAHA</td>
					<td>Tooth Extraction</td>
					<td>6000.00</td>
					<td>4000.00</td>
					<td>2000.00</td>
				</tr>

				<tr id="names">
					<td>02/13/14 4:00PM</td>
					<td>SAKIT IYANG ULO HAHAHA</td>
					<td>Tooth Extraction</td>
					<td>6000.00</td>
					<td>4000.00</td>
					<td>2000.00</td>
				</tr>
			</table>

			
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