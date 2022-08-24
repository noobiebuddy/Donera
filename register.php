<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/zdk2sfw.css">
    <link rel="stylesheet" href="register.css">
    <link rel="icon" href="http://localhost/forhope/img/iconz.ico">
    <title>Donera</title>
</head>
<body>
    <header>
        <nav>
            <div id="logo">Donera</div>
            <div id="sidenav"><a href="admin.html"><img src="http://localhost/forhope/img/admin_panel_settings_black_24dp.svg"></a></div>
        </nav>

        <div id="form">
            <form action="signup.php" method="POST">
                <div><input type="email" name="email"  placeholder="Email Address" required></div>
                <div><input type="password" name="password" placeholder="Password" id="password" required></div>
                <script>
                        var password1 = document.getElementById("password")
                        , confirm_password = document.getElementById("cpwd");

                        function validatePassword(){
                        if(password.value != cpwd.value) {
                            cpwd.setCustomValidity("Passwords Don't Match");
                        } else {
                            cpwd.setCustomValidity('');
                        }
                        }
                        pwd.onchange = validatePassword;
                        cpwd.onkeyup = validatePassword;
                    </script>
                <div><input type="password"  placeholder="Confirm Password" id="cpwd" required></div>
                <div><input type="text"  pattern="[0-9]{10}" name="number" placeholder="Contact Number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" required></div>
                <div><input type="submit" name="submit" onclick="validatePassword()" value="REGISTER"></div>
                <div>
            </form>
        </div>

    </header>
    
</body>
</html>