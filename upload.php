<?php

echo "
	<form enctype=\"multipart/form-data\" action=\"upload.php\" method=\"POST\"> 
    		<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000\" /> 
    			이 파일을 전송합니다: <br>
    		<input name=\"userfile\" type=\"file\" /> 
    		<input type=\"submit\" value=\"파일 전송\" /> 
 	</form>";
 	
 	$uploaddir = './upload/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    		echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
	} else {
    		print "파일 업로드 공격의 가능성이 있습니다!\n";
	}

echo '자세한 디버깅 정보입니다:<br>';
print_r($_FILES);


 ?>