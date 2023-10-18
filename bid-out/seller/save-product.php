<?php
include_once('inc/config.php');
//////////
if(count($_POST)>0){
	if($_POST['type']==1){
    $pname = $_POST['pname'];
    $category = $_POST['category'];
	$feature = $_POST['feature'];
    $description = $_POST['description'];
    $price = $_POST['price'];
	$time = $_POST['time'];
    $date= '2023-10-25';
	$status = $_POST['status'];

	// Convert the user-selected time to the database format
	$databaseFormatTime = date("Y-m-d H:i:s", strtotime($time));


	echo "<script>console.log($feature);</script>" ;
	$length = 8; // Set the desired length of the code
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$cmn_id = '';

	for ($i = 0; $i < $length; $i++) {
		$cmn_id .= $characters[rand(0, strlen($characters) - 1)];
	}

    // Handle image upload
    $image = $_FILES['photo']['name'];
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;
    $path = "upload/" . $filename; 
	

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
    
        $sql = "INSERT INTO bidding_product (cmn_id, product_name,  description, category_id, feature_id, pstatus, price, date, time, image, winner, bid_status) 
                VALUES ('$cmn_id', '$pname', '$description', '$category', '$feature', '$status', '$price', '$date', '$databaseFormatTime', '$path','null','active')";
				$last_id = mysqli_insert_id($con);
				print_r($last_id);
	
	if ($con->query($sql) === TRUE) {
	
		//inserting multi image
		$totalfiles = count($_FILES['file']['name']);
	
		// Looping over all files
		for($i=0;$i<$totalfiles;$i++){
		$filename = $_FILES['file']['name'][$i];
		$image = str_replace(' ', '_', $filename);
	
		// Upload files and store in database
		if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'upload/'.$image)){
			
			// getting last inserted id
			// $sql1 = "SELECT product_id  FROM product";
			// if (mysqli_query($con, $sql1)) {
			// $last_id = mysqli_insert_id($con);
				
	
			// Image db insert sql 
			$insert = "INSERT into bidding_images (file_name,uploaded_on,status) values('$image',now(),'$cmn_id')";
			if($con->query($insert) === TRUE){
				//echo 'Data inserted successfully';
				header('Location:seller.php');
			}
			else{
				echo 'Error: '.mysqli_error($con);
			}
		// }else{
		// 	echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
		// }
	
		}
		//end of inserting multiple image
	}//end of last created id
				//echo "Product inserted successfully.";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
   /* } else {
        echo "Error uploading the image.";
    }*/

	     

			
} else {
	echo "Error uploading the image.";
}//end of single image upload

	}
	
}


/////////////////////




//}
if(count($_POST)>0){
	if($_POST['type']==2){
		$pname_u = $_POST['pname_u'];
		$category_u = $_POST['category_u'];
		$feature_u = $_POST['feature_u'];
		$description_u = $_POST['description_u'];
		$status_u = $_POST['status_u'];
		$price_u = $_POST['price_u'];
		$cprice_u = $_POST['cprice_u'];
		$stock_u = $_POST['stock_u'];
		$id = $_POST['id_u'];

		  // Handle image upload
		  $image = $_FILES['photo_u']['name'];
		  $image_ext = pathinfo($image, PATHINFO_EXTENSION);
		  $filename = time() . '.' . $image_ext;
		  $path = "upload/" . $filename; 
		  move_uploaded_file($_FILES['photo_u']['tmp_name'], $path);
		

		  $sql = "UPDATE product SET product_name='$pname_u', description ='$description_u',  category_id='$category_u', feature_id='$feature_u', pstatus='$status_u', price='$price_u', cutoff_price='$cprice_u', stock='$stock_u', image='$path' WHERE product_id='$id'";

		if (mysqli_query($con, $sql)) {
			//echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
	
	   }
	}// end of post type

if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM product WHERE product_id='$id'";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}

?>