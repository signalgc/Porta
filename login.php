<?php


	require 'club_check.php';			//Club Type Check

echo "
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset='UTF-8'>
			<title>Porta</title>
			<link rel='stylesheet' href='.././CSS/bootstrap/css/bootstrap.css' type='text/css' media='all'/>	
		</head>
		<body>
			<center>
				<h1>Only for Root</h1>
					<form class=\"form-horizontal\" method='POST' action='login_ok.php?club=$club' style='width:50%'>
						<div class=\"form-group\">
							<label class=\"col-sm-2 control-label\">ID</label>
								<div class=\"col-sm-10\">
									<input type=\"text\" class=\"form-control\" name=\"id\" placeholder=\"ID\" required>
								</div>
						</div>
						<div class=\"form-group\">
							<label class=\"col-sm-2 control-label\">Password</label>
								<div class=\"col-sm-10\">
									<input type=\"password\" class=\"form-control\" name=\"pwd\" placeholder=\"Password\" required>
								</div>
						</div>
						<br>
						<div class=\"form-group\">
							<div class=\"col-sm-offset-2 col-sm-10\">
								<button type=\"submit\" class='btn btn-primary btn-lg' role='button'>LOGIN</button>
							</div>
						</div>
					</form>
			</center>		
		</body>
	</html>
";

?>
