<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $name = $_POST['name']; 
    $reffering = $_POST['email']; 
        $address = $_POST['address']; 
                $mob_no = $_POST['mob_no']; 




 	
				$sql = "INSERT INTO `user`(`User_Name`, `User_Contact`, `User_Email`, `User_Address`,)VALUES ('$name', '$mob_no', '$email', '$address')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../client.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
					header('location:../client.php');
				}

			// /else	
		// if
	// if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST