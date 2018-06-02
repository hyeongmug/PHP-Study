<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>검색기능</title>
</head>
<body>
<form action="search_prog.php" method="GET" id="search_form" onsubmit="return f_check(this)">
	<input type="text" name="keyword">
	<button>검색</button>


	<script>
		function f_check(f) {
			if ( f.keyword.value == "" ) {
				alert("검색어가 입력되지 않았습니다.");
				return false;
			}
		}
	</script>
</form>
</body>
</html>