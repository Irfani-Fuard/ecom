<?php
include_once('inc/config.php');
    if(count($_POST)>0){
	if($_POST['type']==1){
    $product = $_POST['product'];

    // Handle image upload
    $photo = $_FILES['image']['name'];
    $image_ext = pathinfo($photo, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;
    $path = "upload/" . $filename; 

    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
    
        $sql = "INSERT INTO images (image, product_id) 
                VALUES ('$path', '$product')";

        if (mysqli_query($con, $sql)) {
            //echo "Image inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Error uploading the image.";
    }

	}
}


//}
if(count($_POST)>0){
	if($_POST['type']==2){
		$product_u = $_POST['product_u'];
		$image_u = $_POST['image_u'];
		$description_u = $_POST['description_u'];
		$price_u = $_POST['price_u'];
		$stock_u = $_POST['stock_u'];

		  // Handle image upload
		  $image = $_FILES['photo_u']['name'];
		  $image_ext = pathinfo($image, PATHINFO_EXTENSION);
		  $filename = time() . '.' . $image_ext;
		  $path = "upload/" . $filename; 
		  move_uploaded_file($_FILES['photo_u']['tmp_name'], $path);
		

		  $sql = "UPDATE product SET name='$product_u', description ='$description_u', image='$image_u', price='$price_u', stock='$stock_u', image='$path'  WHERE id='$id'";

		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
	
	   }
	}// end of post type

if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM product WHERE id='$id'";
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