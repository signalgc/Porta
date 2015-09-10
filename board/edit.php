<?php
		session_start();
 
     require 'var.php';
		
		require 'db_conn.php';							//DB Connection

    $result = mysqli_query($conn,"SELECT * FROM board where board_idx=$idx");              //select 
    $row=mysqli_fetch_array($result);      
              
    echo "
	<!DOCTYPE html>
	<html>
		<head>
			<link rel='stylesheet' href='.././CSS/bootstrap/css/bootstrap.css' type='text/css' media='all'/>	
			<meta charset='UTF-8'>
		</head>
		<body>
			<center>
               			<form  action='edit_ok.php?club=$club'  method='post' id='board'>
               				<h1>글 수정</h1> 
               					<table  class='table table-striped table-responsive' id='board' style='width:50%'> 
              						<tr> 
								<td>글쓴이</td>
                						<td> <input  type='text'  name='id'  size='15'  value='$row[id]' id='board' required></td>
							</tr> 
							<tr> 
                 						<td> 글제목</td> 
                 						<td><input type='text'  name='title'  size='50'  value='$row[title]' id='board' required></td>
							</tr> 
              						<tr> 
                  						<td>글</td> 
                						<td><textarea rows='10' cols='55' name='content' id='board' class=\"form-control\" rows=\"3\">$row[content]</textarea></td>
							</tr> 
              
               					</table> 
              						<input  type='hidden'  name='idx' value='$idx'>
               						<input  type='submit'  value='글수정'id='board' > 
              						<input  type='reset'  value='취소' id='board'> 
               			</form>
         		</center>
         	</body>
	</html>";
     mysqli_close($conn);
         ?>
