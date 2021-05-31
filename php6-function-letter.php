<?php

	$file_store_name = "stores.csv";
    $file_store_open =  fopen($file_store_name, "r");
	while (($row = fgetcsv($file_store_open))) {
		$browse_letter[] = array($row[0], trim($row[1]));
	}


	$remove_letter_from_array = array_shift($browse_letter);
	
	function sortStoreName ($first_store, $second_store) {
		if ($first_store[1] > $second_store[1]) return 1;
		else if ($first_store[1] < $second_store[1]) return -1;
		else return 0;
	}
?>