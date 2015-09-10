	<?php
		session_start();
		
          require 'var.php';

		require 'db_conn.php';	   				//DB Connection 


        	mysqli_query($conn,"Delete from board where board_idx =$idx"); 									//Delete Data
		mysqli_query($conn,"Update board set board_idx=board_idx -1 where board_idx>$idx");				//Update Data
		mysqli_query($conn,"alter table board AUTO_INCREMENT=$idx");									//Reset AUTO_INCREMENT
        	Header("Location:./list.php?club=$club");
        	
          mysqli_close($conn);
         ?>
