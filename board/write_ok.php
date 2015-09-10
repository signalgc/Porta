<?php
    require 'var.php';

    if(!$title || !$content || !$name||!$pwd ){   
		          echo(" <script> window.alert('이름, 제목, 내용,비밀번호를 입력해 주세요 !')history.go(-1) </script>"); 
                    
    }

		require 'db_conn.php';					//DB Connection

 

          
    $result=mysqli_query($conn,"select max(num) from board");                       //
    $row=mysqli_fetch_array($result); 
    
         
    if($row[0]) {                                 //Check MAX num                                          
        $number=$row[0]+1;
    }else{
        $number=1;
    }
    $writeday = time();
        

                                                                                          //INSERT DATA
    mysqli_query($conn,"insert into board                                     
          (id,title, num, writeday, readnum, content,ip,pwd)  
          values 
          ('$name','$title', $number,$writeday,0,'$content','$REMOTE_ADDR','$con_pwd')");

    if($result){                                                                                                            //If you don't have result, echo ERROR
          Header("Location:list.php?club=$club");  
    }else{
          echo("<script language=javascript> window.alert('저장중 오류'); history.go(-1);</script>");
                   
    }	   
    mysqli_close($conn);
?>
