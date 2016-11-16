<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>rickvanbuuren</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Include jquery -->
		<script src="https://code.jquery.com/jquery-3.1.0.slim.js" integrity="sha256-L6ppAjL6jgtRmfiuigeEE5AwNI2pH/X9IBbPyanJeZw=" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- custom made files-->
		<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	</head>
	<body>
		<div class="jumbotron header">
			<div class="row nopadding">
				<div class="col-xs-3 col-sm-hidden col-md-hidden col-lg-hidden">
					<div id="togglenav" class="togglenav">
						<a>
							<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true">&nbsp;</span>
						</a>
					</div>
				</div>
				<div class="col-xs-6 nopadding">
					<div class="title">
						<h1>Rick van Buuren</h1>
					</div>
				</div>
				<div class="col-xs-3 nopadding">
					<div class="diagonal-lines">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<div class="test">
				<div onclick="loadHomePage()"><span>Home</span></div>
				<div onclick="loadAboutMePage()"><span>About me</span></div>
				<div onclick="loadLoginPage()"><span>Log in</span></div>
			</div>
		</div>
		<div class="row nopadding">
			<div class="col-xs-12">
				<div id="content" class="content">
				</div>
			</div>
		</div>
		
		<script src="scripts/main.js"></script>
	</body>
</html>	
