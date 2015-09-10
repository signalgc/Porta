<?php
	session_start();


	if(empty($_SESSION['login'])){				//login status check
		$_SESSION['login']="0";
	}
	


	require 'club_check.php';						//Club	Type Check

	
echo "
	<!DOCTYPE html>
	<html>
		<head>
			<link rel='stylesheet' href='./CSS/bootstrap/css/bootstrap.css ' type='text/css' media='all'/>	
			<meta charset='UTF-8'>
			<title>Porta</title>
		</head>
		<body>
			<center>
				<h1>Welcome to $club</h1><br>";

			if($_SESSION['login']==="0")
			{	
			echo "			
					<a  href='login.php?club=$club'>
						<input type='button' value='로그인' class='btn btn-primary btn-lg ' role='button' style='margin-left:75%'>
					</a>
					&nbsp";
			}else if($_SESSION['login']==="1")
			{
			echo "
					<a href='logout.php'>
						<input type='button' value='로그아웃' class='btn btn-primary btn-lg' role='button' style='margin-left:75%'>
					</a>";
			}
			echo "
						<form method='POST' action='/board/list.php'>
							<input type='hidden' name='club' value='$club' >
							<br>
							<input type='submit' value='동아리 지원하기' onClick=\"location.href='./board/list.php'\" class='btn btn-primary btn-lg' role='button'>
						</form>";
			if($club==="syssecu"){
			echo "
						<h1>다양한 해킹대회 수상실적과 교육생을 배출한 교내 시스템 보안 동아리<br>
						통칭 '시보'<br> 들어온 이상 방학은 3년 동안 포기하는게 정신 건강에 좋다.		
						</h1>
			
						<table class='table table-striped table-responsive table-hover ' style='width:50%'>
							<tr>
								<td>강명석(강민수)&nbsp</td>
								<td>21, 1년에 한두번 출몰, 강아지짤과 상당히 닮았다</td>
							</tr>
							<tr>
								<td>박홍철</td>
								<td>19, 포레기 탈출 2년차</td>
							</tr>
							<tr>
								<td>장민형</td>
								<td>19, 소아성애자, 백마취향</td>
							</tr>
							<tr>
								<td>이나은</td>
								<td>18, 귀소본능자</td>
							</tr>
							<tr>
								<td>김소진</td>
								<td>18, 자기점수 불안증</td>
							</tr>
							<tr>
								<td>지용빈</td>
								<td>19, 관심종자</td>
							</tr>
							<tr>
								<td>이진우</td>
								<td>18, 권력성애자, 또라이</td>
							</tr>
							<tr>
								<td>정택유</td>
								<td>19, 백합성애자(로리콘)</td>
							</tr>
							<tr>
								<td>김성기</td>
								<td>19, 한 때 Ben James의 VIP</td>
							</tr>
							<tr>
								<td>김윤찬</td>
								<td>18, LG팬, 항암치료 요망</td>
							</tr>
							<tr>
								<td>최영준</td>
								<td>19, 음란하다 그리고 음란하다</td>
							</tr>
							<tr>
								<td>정명진</td>
								<td>20, 방화범</td>
							</tr>
							<tr>
								<td>이건휘</td>
								<td>18, 앱등이, 김본좌</td>
							</tr>
							<tr>
								<td>사승준</td>
								<td>18, 똥</td>
							</tr>
							<tr>
								<td>지병훈</td>
								<td>18, 보살</td>
							</tr>
							<tr>
								<td>조현준</td>
								<td>17, 오래된 노트북을 학대한 전과가 있다</td>
							</tr>
							<tr>
								<td>고민수</td>
								<td>19, 알바중독, 피자헛 지박령</td>
							</tr>
						</table>
	";
	} else if($club==="forensic"){
			echo "<h1>Digital Forensic을 공부하는 학생들이 모인곳으로서 <br> 상현교의 광신도들 이다</h1><br>
	";
	} else if($club==="network"){
			echo"<h1>이곳에 오면 3년동안 서브네팅의 삼라만상에 대해서<br> 깨닫게 된 후 득도한다고 한다.</h1>
			
		";
	}else if($club==="program"){
			echo "<h1>Programming language 라는 정식 명칭을 가지고 <br>활동하고 다양한 프로그래밍 언어와 개발에 대해서<br> 공부하는 동아리다 3년 동안 Java 만 파는 성애자들도 있다<br>특징 : 깨중쌤의 노예들</h1>
		
		";

	}
	echo "	<input type='button' value='홈으로' onclick=location.href='../index.html' class='btn btn-primary btn-lg'/>
			</center>
		</body>
	</html>";
?>


