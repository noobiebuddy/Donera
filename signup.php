<?php 

include "config.php";



	if (isset($_POST['submit'])) {

		
		$password = $_POST['password'];
        $email = $_POST['email'];
		$contact = $_POST['number'];
		

		$sql = "INSERT INTO `UserRegister` (`email`,`password`, `contact`) VALUES ('$email','$password','$contact')";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header('location: http://localhost/forhope/login.html');
		

		}else{
			echo '<script>alert("Already Registered !")</script>';
		}
		
		$conn->close();
	}

?>
