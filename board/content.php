<?php			
	session_start();

	
	require 'var.php';

	@require 'db_conn.php';							//DB Connection

		
 		
     	mysqli_query($conn,"Update board Set readnum = readnum + 1 where board_idx=$idx limit 1");  	//Update ReadNum


		if($_SESSION['login']=="1"){  																//You don't need password if you're root
			$result = mysqli_query($conn,"SELECT * FROM board where board_idx=$idx");
		}else{
			$result = mysqli_query($conn,"SELECT * FROM board where board_idx=$idx AND pwd='".mysqli_real_escape_string($conn,$con_pwd)."' limit 1");  
		}
   	
           $row=mysqli_fetch_array($result); 
       
		
		if($row['title']==NULL){
			Header("Location:content_pw.php?idx=$idx&club=$club");
		}
			
          $writeday = date("Y-m-d H:i:s", $row['writeday']);							//transfer to Date
          $content = nl2br(htmlentities($row['content'],ENT_QUOTES,'UTF-8'));  				// Add<br/> & escaping special character & change charset

	     $row['title']=htmlentities($row['title']);								//escape special character
	     





		
            echo "
	<html>
		<head>
			<link rel='stylesheet' href='.././CSS/bootstrap/css/bootstrap.css' type='text/css' media='all'/>	
			<meta charset='UTF-8'>
			<title>게시판</title>
			<script>
				function gopost(val1)
				{
				var f = document.check;
				f.check.value='1';
				f.club_type.value=$club;
				f.submit();
				} 
			</script>
		
		</head>
		<body>
			<center>
				<h1 id='top'>글 내용 보기</h1>
					<TABLE class='table table-striped responsive' style='width:50%' id='board'>
						<TR align=center>
							<TD width=20%>글쓴이</TD>
							<TD width=30%>$row[id]</TD>
							<TD width=20%>날짜</TD>
							<TD width=20%>$writeday</TD>
						</TR>
					</TABLE>
					<TABLE class='table table-bordered table-responsive' style='width:50%' id='board'>
						<TR>
							<TD align=right>조회수:$row[readnum]</TD>
						</TR>
						<TR>
							<TD align=center><h3>제목 : $row[title]</h3></TD>
						</TR>
						<TR>
							<TD >$content<p align=right>from $row[ip]</p></TD>
						</TR>
					</TABLE >
						<p>
							<a href=list.php?club=$club style='text-decoration:none'>목록</a> |
							<form method='post' name='check' action='edit.php?idx=$idx'>
								<input type='hidden' value='' name='check'>
								<input type='hidden' value='' name='club'>
							</form>
							<a href='edit.php?idx=$idx&club=$club' method='post' style='text-decoration:none' >수정</a> | 
							<a href='del.php?idx=$idx&club=$club' style='text-decoration:none'>삭제</a>
			</center>
		</body>
	</html> ";
		mysqli_close($conn);
			
         ?>
