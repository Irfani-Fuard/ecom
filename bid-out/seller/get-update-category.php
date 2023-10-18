<?php
	include ('inc/config.php');

	if ( isset($_GET['cat_uid']) ) {

		$cat_uid = mysqli_real_escape_string($con, $_GET['cat_uid']);
                
        $query2 		= "SELECT * FROM  features  WHERE category_id={$cat_uid}";
		$result_set = mysqli_query($con, $query2);
		$name_list_u = "";
		while ( $result1 = mysqli_fetch_assoc($result_set) ) {
			$name_list_u .= "<option value=\"{$result1['id']}\">{$result1['name']}</option>";
		}
		echo $name_list_u;
	} else {
		echo "<option>Error</option>";
	}

	
?>