<?php
	include 'phpmp3.php';
	
	//Extract 30 seconds starting after 10 seconds.
	$path = 'Amir Ali - Lajbaz (128).mp3';
	$mp3 = new PHPMP3($path);
	$mp3_1 = $mp3->extract(0,59);
	$mp3_1->save('Amir Ali - Lajbaz (128) - Demo.mp3');
	
	/*
		//Merge two files
		$path = 'Amir Ali - Lajbaz (128).mp3';
		$path1 = 'Amir Farjam - Marizam Behet.mp3';
		$mp3 = new PHPMP3($path);		
		$newpath = 'path.mp3';
		$mp3->striptags();
		
		
		$mp3_1 = new PHPMP3($path1);
		$mp3->mergeBehind($mp3_1);
		$mp3->striptags();
		$mp3->setIdv3_2('01','Track Title','Artist','Album','Year','Genre','Comments','Composer','OrigArtist',
		'Copyright','url','encodedBy');
		$mp3->save($newpath);
		
		//Extract the exact length of time
		$path = 'Amir Ali - Lajbaz (128).mp3';
		$mp3 = new PHPMP3($path);
		$mp3->setFileInfoExact();
		echo $mp3->time;
	*/
	
?>