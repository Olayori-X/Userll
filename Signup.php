<DOCTYPE html>
<htmL>
<head>
	<title></title>
	<link rel= "stylesheet" href= "">
	<meta name= "viewport" content= "width= device-width, initial-scale= 1.0">
	<script src= "js/jquery-3.min.js"></script>
	<script src= ""></script>
	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" href = "signupStyle.css">
</head>
<body>
	<h1>

		<span id= "titleHeader">Usell</span>

	</h1>
	<div id= "header">Fill in the right details</div>

	<table>
		<div class = "row">
			<div class = "col-sm-6">Let us create</div>
			<div class = "col-sm-6">
				<form method= "post" action= "createusers.php">
						<div id= "Fname">
							<label>First Name</label><br>
							<input type= "text" id= "F_inputs" name= "firNme"><br>
						</div>

						<div id= "Lname">
							<label>Last Name</label><br>
							<input type= "text" id= "L_inputs" name= "lasNme"><br>
						</div>

						<div id= "phoneNo">
							<label>Phone Number</label><br>
							<input type= "tel" id= "PN_inputs" name = "phnNo"><br>
						</div>

						<div id= "eMail">
							<label>E-Mail</label><br>
							<input type= "email" id= "Em_inputs" name= "email"><br>
						</div>

						<label>Country</label><br>
						<input type = "text" id= "country" name = "country"><br>

						<label>State</label><br>
						<input type = "text" id= "state" name = "state"><br>

						<label>City</label><br>
						<input type = "text" id= "city" name = "city"><br>

						<div id= "password">
							<label>Password</label><br>
							<input type= "password" id= "PWD_inputs" name= "passcode"><br>
						</div>

						<div id= "SubmitPage">
							<button type= "submit" id= "SubmitForm">Submit</button>

						</div>
				</form>

				<p>If you have an account, Please <a href= "Login.php">Log In</a></p>
			</div>
		</div>
	</table>

</body>
</html>
