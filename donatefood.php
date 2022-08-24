<?php 

include "config.php";



	if (isset($_POST['submit'])) {

		
   
		$name = $_POST['name'];
		$foodtype = $_POST['foodtype'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		

		$sql = "INSERT INTO `donatefood` (`Name`,`Food_Type`, `Contact`, `Address`) VALUES ('$name','$foodtype','$contact','$address')";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header('location: http://localhost/forhope/hurray.html');
		

		}else{
			echo '<script>alert("E R R O R !")</script>';
		}
		
		$conn->close();
	}

?>
