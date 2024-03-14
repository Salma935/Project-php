<?php  
   session_start(); 
 
   include("php/config.php"); 
   if(!isset($_SESSION['valid'])){ 
    header("Location: index.php"); 
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Change Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="Home.php">Logo</a></p>
        </div>

        <div class="right-link">
            <a href="#">Change Profile</a>
            <a href="logout.php"><button class="button">Log Out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="X From-Box">
        <?php  
               if(isset($_POST['submit'])){ 
                $username = $_POST['username']; 
                $email = $_POST['email']; 
                $age = $_POST['age']; 
 
                $id = $_SESSION['id']; 
 
                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE Id=$id ") or die("error occurred"); 
 
                if($edit_query){ 
                    echo "<div class='message'> 
                    <p>Profile Updated!</p> 
                </div> <br>"; 
              echo "<a href='home.php'><button class='btn'>Go Home</button>"; 
        
                } 
               }else{ 
 
                $id = $_SESSION['id']; 
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id "); 
 
                while($result = mysqli_fetch_assoc($query)){ 
                    $res_Uname = $result['Username']; 
                    $res_Email = $result['Email']; 
                    $res_Age = $result['Age']; 
                } 
 
            ?>
            <header>Change Profile</header>
            <form action="" method="post">
                <div class ="Y Input">
                    <label for="Username">Username</label> 
                    <input type="text" name="Username" id="Username" autocomplete="off" required>
                </div>

                <div class ="Y Input">
                    <label for="Email">Email</label> 
                    <input type="Email" name="Email" id="Email" autocomplete="off" required>
                </div>
                 
                <div class ="Y Input">
                    <label for="Aage">Aage</label> 
                    <input type="number" name="Aage" id="Aage" autocomplete="off" required>
                </div>
  
                <div class="Y">
                    <input type="submit" class="button" name="submit" Value="Update">
                </div>
                <div class="Link">
                    Already a member? <a href="Login.html">Sign In</a>
                </div>
            </form>
        </div>
        <?php }
        ?>
    </div>
</body>
</html>