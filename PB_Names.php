<?php
//Project Penny Blossoms

$dataFile = fopen("PB_Data.txt", "w") or die("Unable to open file!");

$array = $_POST;
foreach($array as $i => $info){	
	foreach($info as $key => $value){
		$f_name = array_key_exists('firstname', $value) ? $value['firstname'] : null;
		$s_name = array_key_exists('surname', $value) ? $value['surname'] : null;
		
		$data = $f_name . " " . $s_name . "\r\n";
		fwrite($dataFile,$data);
	}
}
fclose($dataFile);
if(isset($data)){
	
	Echo "Information Has been successfully inputted, please wait whilst we send you back.";
	header( "refresh:4;url=PB_Entry_Form.html" );
}
?>
