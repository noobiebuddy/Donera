<?php 
include "config.php";


if (isset($_GET['Name'])) {
	$name = $_GET['Name'];

	
	$sql = "DELETE FROM `donatethings` WHERE `Name`='$name'";



	$result = $conn->query($sql);

	if ($result == TRUE) {
        header('location: http://localhost/forhope/things.php');
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>