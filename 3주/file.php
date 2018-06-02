<?php 
	/*
		새로 배우는 함수
		fopen
		fwrite 
		fread
		fseek
		fclose 
		feof

	*/



	// 파일 쓰기
	$fh = fopen("test.txt", 'a');
	fwrite($fh, "PHP 존잼");
	fclose($fh);

	// 5바이트 읽기
	$fh = fopen("test.txt", 'r');
	echo fread($fh, 5);
	fclose($fh);

	// 한 라인 읽기
	$fh = fopen("test.txt", 'r');
	echo fgets($fh);
	fclose($fh);

	// 5번째 바이트로 간다음 10바이트를 읽어서 출력하기
	$fh = fopen("test.txt", 'r');
	fseek($fh,5);
	echo fread($fh,10);
	fclose($fh);




	/*

		r 파일 읽기 전용
		w 파일 쓰기 전용(파일이 있으면 파일의 크기를 0으로 만들고, 없으면 새 파일을 만든다)
		a 파일 쓰기 전용(파일이 존재하면 그 파일의 끝에 덧붙여 쓰고, 없으면 새 파일을 만든다)
		r+ 파일 읽고 쓰기 전용
		w+ 파일 읽고 쓰기 전용(파일이 존재하면 크기를 0으로 만들고 없으면 새파일 만든다)
		a+ 파일 읽고 쓰기 전용(파일이 이미 존재하면 끝에 덧붙여 쓰고, 없으면 새 파일을 만든다)
		b 바이너리 데이터로 설정(생략 가능)

	*/




	// 전체 읽기
	$file_handle = fopen("lyrics.txt", "r");

	while (!feof($file_handle)) {

		$line_of_text = fgets($file_handle);
		echo $line_of_text;

	}

	fclose($file_handle);



	/*
		연습문제 
		lyrics.txt을 전부 읽어 줄바꿈 되게 출력하시오.
	*/

?>