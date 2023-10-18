<?php
include_once('inc/config.php');
if(count($_POST)>0){
	if($_POST['type']==1){
	$category = $_POST['category'];

	$sql= "INSERT INTO category (name) VALUES ('$category')";

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
		
		$sql = "UPDATE category SET name='$category_u' WHERE id='$id'";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
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
		$sql = "DELETE FROM category WHERE id ='$id'";
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