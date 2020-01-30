<?php header("Content-Type: text/html; charset=UTF-8"); ?>

<?php
	function br() {
		echo "<br>";
	}


	echo "안녕하세요";
	br();

	// 문자열 바이트 수 얻기
	echo strlen("안녕하세요.");
	br();
	echo mb_strlen("안녕하세요.");
	br();

	//문자열 자르기
	echo substr("안녕하세요.",2,2);
	br();
	echo mb_substr("안녕하세요.",2,2);
	br();

	// 문자열 바꾸기
	echo str_replace("안녕","양념","안녕하세요.");
	br();

	// HTML태그 제거
	echo strip_tags('<a href="www.naver.com">네이버</a>');
	br();

	// 특수문자 엔티티코드로 처리하기
	echo htmlspecialchars('<a href="www.naver.com">네이버</a>', ENT_QUOTES);
	// echo htmlspecialchars("<a href="www.naver.com">네이버</a>", ENT_QUOTES);
	br();

	// 이스케이프 처리하기
	echo addslashes('"사과","귤","감","밤"');

	// 개행코드 줄바꿈
	echo nl2br(
		"PHP의 함수는
		정말 편리
		합니다."
	);
	br();



/*
	function nl2br_($str) {
		$str2 = str_replace("\t","",$str);
		return str_replace("\n","<br>",$str2);
	}

	echo nl2br_("
		캑
		ㅇㅇ
		ㅇ
	");

*/

/*
	function br($str) {
		echo $str."<br>";
	}

	br("안녕하세요");
	br(strlen("안녕하세요."));
	br(mb_strlen("안녕하세요."));
	br(substr("안녕하세요.",2,2));


*/


?>
