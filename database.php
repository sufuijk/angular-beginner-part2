<?php 

	$query = "SELECT * FROM tb_chat";
	$mysql = new mysqli("localhost","root","","chatdb");
	$result = $mysql->query($query);


	$out = "";

	while( $row = $result->fetch_assoc()){
		if( $out != ""){ $out .=",";}

		$out .= '{"id":"' . $row["id"] . '",';
		$out .= '"user":"' . $row["user"] . '",';
		$out .= '"msg":"' . $row["msg"] . '",';
		$out .= '"timeline":"' . $row["timeline"] . '"}'; 
	}
	
	$out ='{"records":['.$out.']}';
		
	echo $out;
?>