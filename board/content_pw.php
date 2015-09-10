<?php
	session_start();			

	require 'var.php';
	require '../club_check.php';

	
	echo "
	<!DOCTYPE html>
		<html>
			<head>
				<link rel='stylesheet' href='.././CSS/bootstrap/css/bootstrap.css' type='text/css' media='all'/>	
				<meta charset=\"UTF-8\">
			</head>
			<body>	
				<center>
					<form class=\"form-horizontal\" method=\"POST\" action=\"content.php?idx=$idx\" style='margin-top:20%; width:40%'>
						<div class=\"form-group\">
    							<label class=\"col-sm-2 control-label\">Password</label>
    								<div class=\"col-sm-10\">
      									<input type=\"password\" class=\"form-control\" name=\"con_pwd\" placeholder=\"Password\" required style='margin-left:5%'>
									<input type='hidden' name='club' value='$club'>
    								</div>
  						</div>
						<br>
  						<div class=\"form-group\">
    							<div class=\"col-sm-offset-2 col-sm-10\">
      								<button type=\"submit\" class='btn btn-primary btn-lg' role='button'>CHECK</button>
    							</div>
  						</div>
					</form>
				</center>
		
			</body>
		</html>
	";
?>
