<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<div class="calendar">

<?php
	$m = isset($_GET['m']) ? $_GET['m'] : date("m");
	$t = date("t",mktime(0,0,0,$m,"01",date("Y")));
	$sw = date("w",mktime(0,0,0,$m,"01",date("Y")));


	$b_m = $m - 1;
	$a_m = $m + 1;
?>



<a href="calendar.php?m=<?php echo $b_m ?>">이전달</a>
<a href="calendar.php?m=<?php echo $a_m ?>">다음달</a>	
<?php
	// 1. 총일수 
	$last_day = $t;

	// 2. 시작요일
	$start_week = $sw;



	$day = 1;
	$tag  = '<table>';
	for ($i = 0; $i < 6; $i++) {
		$tag .= '<tr>';

			for ($j = 0; $j < 7; $j++) {



				$tag .= '<td class="w_'.$j.'">';


				if ($j + ($i * 7) >= $start_week && $day <= $last_day ) {
					$tag .= $day++;
				} 
				$tag .= '</td>';
			}

		$tag .= '</tr>';		
	}
	$tag .= '</table>';

	echo $tag;

?>
</div>
</body>
</html>

