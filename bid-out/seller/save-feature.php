<?php
include_once('inc/config.php');
if(count($_POST)>0){
	if($_POST['type']==1){
	$category = $_POST['category'];
    $feature = $_POST['feature'];

	$sql= "INSERT INTO  features (name, category_id) VALUES ('$feature', '$category')";

		if (mysqli_query($con, $sql)) {
			
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
	}
}

if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id_u'];
		$category_u=$_POST['category_u'];
		$feature_u=$_POST['feature_u'];

		
		$sql = "UPDATE features SET name='$feature_u', category_id='$category_u'  WHERE id='$id'";
		if (mysqli_query($con, $sql)) {
			//echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}


if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM features WHERE id ='$id'";
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