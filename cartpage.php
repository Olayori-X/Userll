<?php
session_start();

if(isset($_SESSION['Email'])){
	$email = $_SESSION['Email'];

?>
<DOCTYPE html>
<html>
<head>
	<title>Usell</title>
	<link rel= "stylesheet" href= "productStyle.css">
	<meta name= "viewport" content= "width= device-width, initial-scale= 1.0">
	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="./cart.js"></script>
</head>
<body onload = "getCartItem()">

<header>
	<div id = "navbar">
	<img src = "userll-removebg-preview.png" width= "200px" height= "100px">
	<!--The search bar-->
	<div id = "search"><input type = "text" id= "input" placeholder="Search">
	<!--The search button-->
	<button type = "button" onclick = "searchInput()">Search</button></div>
</header>

<!--The button for Log out-->
<a href = "Login.php">Log Out</a>
<a href = "changepassword.php?key=<?php echo $email;?>">Change Password</a>


<!--The link to sell your own product-->
<p>Do you want to sell your own product too? <a href = "uploadPrd.php">Click here</a></p>


<h3>Check out what people are selling</h3>
<!--The div for the product gallery-->
<div id = "pdgallery"></div>

<p id = "hello"></p>

<!--The div for the description of each product-->
<div id = "container">
	<div id = "descContainer">
		<button type = "button" id = "closedesc" onclick = "closedesc()">Close</button>
		<div id= "description"></div>
	</div>
</div>

<div id = "cartitems">
	
</div>
 

</body>
</html>
<?php

}else{
	header("Location: Login.php");
	exit();
}
?>