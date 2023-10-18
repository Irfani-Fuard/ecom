<?php
	include ('inc/config.php');

	if ( isset($_GET['category_id']) ) {

		$category_id = mysqli_real_escape_string($con, $_GET['category_id']);
                
        $query2 		= "SELECT * FROM  features  WHERE category_id={$category_id}";
		$result_set = mysqli_query($con, $query2);
		$name_list = "";
		while ( $result1 = mysqli_fetch_assoc($result_set) ) {
			$name_list .= "<option value=\"{$result1['id']}\">{$result1['name']}</option>";
		}
		echo $name_list;
	} else {
		echo "<option>Error</option>";
	}

	
?>