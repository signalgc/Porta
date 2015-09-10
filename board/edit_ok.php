<?php
			require 'var.php';

			require 'db_conn.php';						//DB Connection

        mysqli_query($conn,"update board set                //Update board;
                            id='$id',              
                            title ='$title',
                            content = '$content' 
                            where board_idx = '$idx'");
        Header("Location:./list.php?club=$club");      
            
        mysqli_close($conn);
?>


