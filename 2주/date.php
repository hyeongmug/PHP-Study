<?php
	echo time();
	echo '<br>';

	// mktime(시간,분,초,월,일,년);
	echo mktime(20,59,0,5,25,2018);
	echo '<br>';

	// date(날짜포맷, 타임스탬프);
	echo date('Y년m월d일 H시i분s초',time());
	// echo date('Y년m월d일 H시i분s초');
	echo '<br>';

	// checkdate(월, 일, 년);
	echo checkdate(2,31,2018) ? "true" : "false";
	echo "<br>";




	//달력 

	// 1. 총일수 
	echo $last_day = date("t", time());
	echo "<br>";

	// 2. 시작요일
	echo $start_week = date("w", mktime(0,0,0,date("m"),"01",date("Y")));
	echo "<br>";



	$day = 1;
	$tag  = '<table>';
	for ($i = 0; $i < 6; $i++) {
		$tag .= '<tr>';

			for ($j = 0; $j < 7; $j++) {
				$tag .= '<td>';
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