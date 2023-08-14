<DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
    </head>
    <body>

        <form id = "" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
            <label>New Password</label><br>
            <input type = "password" id = "nPass" name = "nPass"><br><br>

            <label>Confirm Password</label><br>
            <input type = "password" id = "cPass" name = "cPass"><br><br>

            <button type ="submit">Change</button>
        </form>

        <?php
        include 'connect.php';

        if(isset($_POST['nPass']) && isset($_POST['cPass'])){
            
                $key = $_GET['key'];
                function validate($data){
                    $data= trim($data);
                    $data = stripslashes($data);
                    $data= htmlspecialchars($data);
            
                    return $data;
                }
                $pass = validate($_POST['nPass']);
                $passtwo = validate($_POST['cPass']);


                if(empty($pass)){
                    echo "You have not input your new password";
                }    
                elseif (empty($passtwo)) {
                        echo "Please confirm your password";
                }
                elseif(!($pass == $passtwo)){
                    echo "The passwords do not match";
                }
                else{
                    $email = "SELECT Email FROM users WHERE Email = '$key'";
                    $check = mysqli_query($connect, $email);

                    if(mysqli_num_rows($check) == 1){
                        $update = "UPDATE users SET Password = '$pass' WHERE Email = '$key'";
                        $queryupdate = mysqli_query($connect, $update);

                        if($queryupdate){
                             header('Location: Login.php');
                        }
                    }
                }
            }
        ?>
    </body>
</html>