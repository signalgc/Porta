 <?php
	session_start();
	
	require 'var.php';
	
echo "
	<!DOCTYPE html>
	<html>
		<head>
			<link rel='stylesheet' href='.././CSS/bootstrap/css/bootstrap.css' type='text/css' media='all'/>	
			<meta charset='UTF-8'>
		</head>
		<body> 
			<center>
				<form  action='write_ok.php'  method='POST' id='board'>
					<h1>글 올리기</h1> 
						<table class='table table-striped table-responsive' id='board' style='width:50%'> 
							<tr> 
								<td>글쓴이</td>
								<td> <input  type=\"text\"  name='name' required></td>
							</tr> 
							<tr>  
								<td> 글제목</td> 
								<td><input  type=\"text\"  name='title' required></td>
							</tr> 
							<tr>
								<td>비밀번호</td> 
								<td><input  type=\"password\"  name='pwd'  required></td>
							</tr> 
								<input type=\"hidden\" name='club' value='$club'>
							</tr>         
							<tr> 
								<td>글</td> 
								<td><textarea rows=\"10\"  name='content'  cols=\"55\"></textarea></td>
							</tr> 
						</table>    
						<br>     
							<input  type=\"submit\"  value=\"글작성\" id='board' > 	
							<input  type=\"reset\"  value=\"취소\" id='board' > 
							<input  type=\"button\"  value=\"게시판\" onclick=\"location.href='javascript:history.go(-1);'\" > 
				</form>
			</center> 
		</body> 
	</html>
	";
?>
