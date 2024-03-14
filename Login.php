<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="X From-Box">
            <header>Login</header>
            <form action="" method="post">
                <div class ="Y Input">
                    <label for="Username">Username</label> 
                    <input type="text" name="Username" id="Username" required>
                </div>
                
                <div class ="Y Input">
                    <label for="Password">Password</label> 
                    <input type="Password" name="Password" id="Password" required>
                </div>
  
                <div class="Y">
                    <input type="submit" class="button" name="submit" Value="Login">
                </div>
                <div class="Link">
                    Don't have account? <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<!--
Y Input == field Input
X From-Box = BOX from-box
button = btn
Y = class for button submit
-->