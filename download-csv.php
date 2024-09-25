<?php
	
/*//function array_to_csv_download($array, $filename = "export.csv", $delimiter=";") {
    // open raw memory as file so no temp files needed, you might run out of memory though
	$filename = "selo.csv";
    $f = fopen('selo.csv', 'r'); 
    // loop over the input array
    //foreach ($array as $line) { 
        // generate csv lines from the inner arrays
        //fputcsv($f, $line, $delimiter); 
    //}
    // reset the file pointer to the start of the file
    fseek($f, 0);
    // tell the browser it's going to be a csv file
    header('Content-Type: application/csv');
    // tell the browser we want to save it instead of displaying it
    header('Content-Disposition: attachment; filename="'.$filename.'";');
    // make php send the generated csv lines to the browser
    fpassthru($f);
//}*/
    
    $filename = "selo.csv";

	header('Content-type: application/csv');
	header('Content-Disposition: attachment; filename='.$filename);
    $handle = fopen("selo.csv", "r");
	$row = 0;
	while ($line = fgetcsv($handle, 1000, ",")) {
		if ($row++ == 0) {
			continue;
		}
		
		$people[] = [
			'data' => $line[0],
			'de' => $line[1],
			'para' => $line[2],
			'email' => $line[3],
			'selo' => $line[4],
			'mensagem' => $line[5]
		];
	}

	fclose($handle);
?>