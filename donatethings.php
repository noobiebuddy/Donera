<?php 

include "config.php";



	if (isset($_POST['submit'])) {

		
   
		$name = $_POST['name'];
		$typeofthing = $_POST['typeofthing'];
		$address = $_POST['address'];
		$description = $_POST['description'];
		

		$sql = "INSERT INTO `donatethings` (`Name`,`Things_Type`, `Description`, `Address`) VALUES ('$name','$typeofthing','$description','$address')";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header('location: http://localhost/forhope/hurray.html');
		

		}else{
			echo '<script>alert("E R R O R !")</script>';
		}
		
		$conn->close();
	}

?>
