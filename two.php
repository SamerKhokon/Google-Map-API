<?php
	$db = mysql_connect("localhost","root","Atomix@123$%^");
	mysql_select_db("cream" , $db);
	
	$str = "SELECT 	`slid`, `directory`, `filename`, 
					`duration`, `size`, `order_id`
	 
				FROM 	`tbl_my_file_listing` ";
				
	$stm = mysql_query($str);			
	while($r = mysql_fetch_assoc($stm)) {
	    $result[] = array(
		    "id"=>(int)$r["slid"] ,
			"filename" => $r["filename"] ,
			"duration" => $r["duration"],
			"size"     => $r["size"]
		); 
	}

	header("Content-type: application/json");
	echo json_encode($result);
?>