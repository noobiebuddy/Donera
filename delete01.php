<?php 
include "config.php";


if (isset($_GET['Name'])) {
	$name = $_GET['Name'];

	
	$sql = "DELETE FROM `donateclothes` WHERE `Name`='$name'";



	$result = $conn->query($sql);

	if ($result == TRUE) {
        header('location: http://localhost/forhope/clothes.php');
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>