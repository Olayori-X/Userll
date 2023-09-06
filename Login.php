<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "Loginstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <h1><span id="titleHeader">Usell</span></h1>
    <p id="demo"></p>
    <h4>Fill in the right details</h4>
    <form method="post" action="checkuser.php">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?> </p>
        <?php } ?>

        <div id="LogInDiv">
            <div id="EmailDiv">
                <label>E-mail</label><br>
                <input id="loginEmail" type="email" name="loginEmail"><br>
            </div>

            <div id="PasswordDiv">
                <label>Password</label><br>
                <input id="loginPassword" type="password" name="loginPassword"><br>
                <button type="submit" id="logIn">Log in</button>
            </div>
        </div>
    </form>
    <form id="" action="ForgotPassword.php" method="post">
        <button type="submit" name="send">Forgot Password</button>
    </form>
    <div id="pDiv">
        <p>If you don't have an account, Please <a href="SignUp.php">Sign Up</a></p>
    </div>
</div>
</body>
</html>
