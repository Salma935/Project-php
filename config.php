<?php
$con = mysqli_connect("localhost","root","","project PHP") or die("Couldn't connect")
?>
<?php
        include("php/config.php");
        if(isset($_POST['submit'])){
            $username=$_POST['usernam'];
            $email=$_POST['email'];
            $age=$_POST['age'];
            $password=$_POST['password'];

            //verifying unique email

            $verify_query=mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
            if(mysqli_num_rows($verify_query)!=0){
                echo "<div class='message'>
                <p>This email is used,Try another One Please!</p>
                </div> <br>";
                echo "<a herf='javascript:self.history.back()'><button class='button'>Go Back</button>";
            }
            else{
                mysqli_query($con,"INSERT INTO users (username,email,age,password)VALUES('$username,'$email','$age','$password')") or die("Error occurred")
                echo "<div class='message'>
                <p>Registration successfully!</p>
                </div> <br>";
                echo "<a herf='Login.php'><button class='button'>Go Back</button>";
            }

        }
         
        ?>