<?php
//Project Penny Blossoms

$array = $_POST;
foreach($array as $i => $info){	
	foreach($info as $key => $value){
		$f_name = array_key_exists('firstname', $value) ? $value['firstname'] : null;
		$s_name = array_key_exists('surname', $value) ? $value['surname'] : null;
		
		$data = $f_name . " " . $s_name . "\r\n";
		
		$input = file_put_contents('PB_Data.txt', $data, FILE_APPEND | LOCK_EX);
		
	}
}

if($input === false){
	die('Could not input in to file.');
}else{
	echo "Information inputted successfully.";
}



?>