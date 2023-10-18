<?php
include_once('inc/config.php');
if(count($_POST)>0){
	if($_POST['type']==1){
		
		$sname=$_POST['sname'];
		$mnumber=$_POST['mnumber'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$sql = "INSERT INTO  seller (Seller_name, Address, Contact_no, Email) 
		VALUES ('$sname','$address','$mnumber','$email')";
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
	if($_POST['type']==2){
		$id=$_POST['id_u'];
		$sname=$_POST['sname_u'];
		$mnumber=$_POST['mnumber_u'];
		$address=$_POST['address_u'];
		$email=$_POST['email_u'];
		
		
		$sql = "UPDATE tblsupplier SET Supplier_name='$sname', Contact_no='$mnumber', Address='$address', Email='$email' WHERE id='$id'";
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
		$sql = "DELETE FROM tblsupplier WHERE id='$id'";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM tblsupplier WHERE id in ($id)";
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