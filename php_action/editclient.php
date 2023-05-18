<?php 	

require_once 'core.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
//echo $brandId;exit;
if($_POST) {	
//echo "123";exit;
	 $name = $_POST['name']; 
    $reffering = $_POST['email']; 
        $address = $_POST['address']; 
                $mob_no = $_POST['mob_no']; 


//echo $brandId;exit;
	$sql = "UPDATE user SET User_Name = '$name', User_Email = '$reffering',User_Address = '$address', User_Contact = '$mob_no' WHERE User_Id = '$id'";
//echo $sql;exit;
	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		header('location:../client.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST