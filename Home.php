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
    <title>Home</title>
</head>
<body>
     <div class="nav">
        <div class="logo">
            <p><a href="Home.pp">Logo</a></p>
        </div>

        <div  class="right-link">
        <?php  
             
             $id = $_SESSION['id']; 
             $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id"); 
  
             while($result = mysqli_fetch_assoc($query)){ 
                 $res_Uname = $result['Username']; 
                 $res_Email = $result['Email']; 
                 $res_Age = $result['Age']; 
                 $res_id = $result['Id']; 
             } 
              
             echo "<a href='edit.php?Id=$res_id'>Change Profile</a>"; 
             ?>
            <a href="#">Change Profile</a>
            <a herf="logout.php"><button class="button">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello<b> Salwan</b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is<b>935#@gmail.com</b>.</p>
                </div>
            </div>
            <div class="btn">
                <div class="box">
                    <p>And you are <b>25 Years</b>.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
<!--
  btn== buton
-->