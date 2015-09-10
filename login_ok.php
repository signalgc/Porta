<?php
	session_start();


	
	require 'club_check.php';					//Club Type Check
	
	require './board/db_conn.php';			//DB Connetcion
            

		
		@$query="select id,pwd from user where id='" . mysqli_real_escape_string($conn,$id) . "' AND pwd='" . mysqli_real_escape_string($conn,$pwd) . "' limit 1";

		@$result=mysqli_query($conn,$query);

		@$row=mysqli_fetch_array($result);
		
		
		if($row['id']==="root" && $row['pwd']==="wpwkrtlf123"){			//id=root & password=제작실123
			$_SESSION['login']="1";
		}else{
			$_SESSION['login']="0";
		}
		
		
		Header("Location:club_main.php?club=$club"); 
				
		mysqli_close($conn);

		
?>

