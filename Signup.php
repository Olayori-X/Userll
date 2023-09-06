<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="signupStyle.css">
</head>
<body>
<h1><span id="titleHeader">Usell</span></h1>
<div id="header">Fill in the right details</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form method="post" action="createusers.php">
                <div id="Fname">
                    <label>First Name</label>
                    <input type="text" id="F_inputs" name="firNme">
                </div>

                <div id="Lname">
                    <label>Last Name</label>
                    <input type="text" id="L_inputs" name="lasNme">
                </div>

                <div id="phoneNo">
                    <label>Phone Number</label>
                    <input type="tel" id="PN_inputs" name="phnNo">
                </div>

                <div id="eMail">
                    <label>E-Mail</label>
                    <input type="email" id="Em_inputs" name="email">
                </div>

                <label>Country</label>
                <input type="text" id="country" name="country">

                <label>State</label>
                <input type="text" id="state" name="state">

                <label>City</label>
                <input type="text" id="city" name="city">

                <div id="password">
                    <label>Password</label>
                    <input type="password" id="PWD_inputs" name="passcode">
                </div>

                <div id="SubmitPage">
                    <button type="submit" id="SubmitForm">Submit</button>
                </div>
            </form>

            <p>If you have an account, Please <a href="Login.php">Log In</a></p>
        </div>
    </div>
</div>

</body>
</html>
