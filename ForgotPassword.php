<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
    </head>
    <body>
        <form class = "" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
            Email<input type ="email" name = "email" value = ""><br>
            <button type = "Submit" name = "send">Continue</button>
        </form>

        <?php
       include 'connect.php';
        
        if(isset($_POST["email"])){
            function validate($data){
                $data= trim($data);
                $data = stripslashes($data);
                $data= htmlspecialchars($data);
        
                return $data;
            }
            $email = validate($_POST['email']);

            if(empty($email)){
                echo "Email is required";
            }
            else{
                $check = "SELECT Email FROM users WHERE Email = '$email' ";

                $confirm = mysqli_query($connect, $check);

                if($confirm){
                    session_start(); 
                    $_SESSION['Email'] = $email;
                    header('Location: e.php');
                }
            }
             
        }
        ?>

 </body>
</html>