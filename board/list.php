<?php
		session_start();


		require 'var.php';

		require '../club_check.php';					//Club Type Check

		require 'db_conn.php';						//DB Connection
	
          $result=mysqli_query($conn,"select * from board");				//Select list of all board
          $total = mysqli_affected_rows($conn);  
	
		$REMOTE_ADDR=$_SERVER['REMOTE_ADDR'];
           echo "


	<!DOCTYPE html>
	<html>
		<head>
			<link rel='stylesheet' href='.././CSS/bootstrap/css/bootstrap.css' type='text/css' media='all'/>	
			<meta charset='UTF-8'>
			<style>
				table
				{
				font-size: 75%;
				}
			</style>
		</head>
		<body>
			<center>
			<br><br><br>
				<h1>게시판</h>
				<br><br>
					<table width=50% align='center'> 
						<tr onclick=\"document.location.href='write.php?club=$club'\" style='cursor:pointer'>
							<td align=left><h2>글올리기</h2></td>
							<td align=right ><h2 >게시물수:".$total."</h2></td>	 
						</tr>
					</table>
					<table  width=\"30%\" class='table table-striped table-responsive table-hover' align='center' style='width:60%'> 
						<tr> 
							<td align=center width=10%>번호</td> 
							<td align=center width=20%>글쓴이</td> 
							<td align=center width=20%>날짜</td> 
							<td align=center width=40%>제목</td> 
							<td align=center width=10%>조회수</td> 
						</tr> ";     
							while($row=mysqli_fetch_array($result)){    
							$writeday=date("Y-m-d",$row['writeday']);   
							echo "
						<tr onclick=\"document.location.href='content_pw.php?idx=$row[board_idx]&club=$club'\" style='cursor:pointer'> 
							<td align=center width=10%>$row[num]</td> 
							<td align=center width=10%>$row[id]</td> 
							<input type='hidden' name='club' value='$club'>
							<td align=center width=20%>$writeday</td> 
							<td align=center width=40% >$row[title]</td> 
							<td align=center width=10%>$row[readnum]</td>      
						
						</tr> ";
							}
						echo "
					</table><p> 
						<input type='button' value='홈으로' onclick=location.href='../index.html' class='btn btn-primary btn-lg'/>
		</body>
	</html>"; 
	mysqli_close($conn);
?>





