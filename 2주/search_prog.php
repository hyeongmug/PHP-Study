<?php

$keyword = $_GET["keyword"];
echo $keyword;

if ( $keyword == "" ) {
?>

	<script>
	alert("검색어를 입력하지 않았습니다.");
	history.back(-1);
	</script>

<?php
	exit;
}

$row = ["네이버 주식이 5%상승","다음 부도","북 비핵화 안해", "네이트 주식이 3% 상승", "스타벅스에 오다", "또링이는 심심하다"];


function board_search($keyword) {
	global $row;
	for ($i = 0; $i < count($row); $i++ ) {
		if ( strpos($row[$i], $keyword) ) {
			echo $row[$i];
			echo "<br>";
		}
	}
}


echo "검색어는 ". $keyword."입니다.";
echo "<br>";

echo "검색결과";
echo "<br>";
board_search($keyword);


?>