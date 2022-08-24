
<?php
include "config.php";

if(isset($_POST["email"], $_POST["password"])) 
    {     
        $name = $_POST["email"]; 
        $password = $_POST["password"];
    if($name == "admin@gmail.com" && $password == "admin"){
        $_SESSION["logged_in"] = true; 
        $_SESSION["naam"] = $name; 
        header('location: http://localhost/forhope/admindash.html');

    }
    elseif($name == "admin@gmail.com" && $password != "admin"){
        header('location: http://localhost/forhope/403.html');
    }
    elseif($name != "admin@gmail.com" && $password == "admin"){
        header('location: http://localhost/forhope/403.html');
    }
       
    else{

        $name = $_POST["email"]; 
        $password = $_POST["password"];
        $select1 = "SELECT password FROM userregister WHERE email = '".$name."'";

        $result1=$conn->query($select1);
        $row1=$result1->fetch_assoc();

        $select2 = "SELECT email FROM userregister WHERE password = '".$password."'";

        $result2=$conn->query($select2);
        $row2=$result2->fetch_assoc();


        if($name == $row2["email"] && $password == $row1["password"]) 
        { 
             $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $name; 
            header('location: http://localhost/forhope/homepage_clone.html');


        }
        else
        {
            header('location: http://localhost/forhope/401.html');

        }

        
}
    }



    ?>

