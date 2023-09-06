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
	<script src="./productjs.js"></script>
	<script src="./cart.js"></script>
</head>
<body onload = "loadProducts(products);">

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
<h3>Categories</h3>
<div id = "categories">
	<button type ="button" id = "phcat">Phones</button>
	<button type ="button" id = "jwcat">Jewelries</button>
	<button type = "button" id = "clcat">Clothes</button>
	<button type = "button" id = "shcat">Shoes</button>
	<a href = "cartpage.php"><button tye = "button">Cart</button></a>
	<button type = "button" onclick = "chat()">Chat</button>
</div>


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


<!--PHP code for getting database and putting it in array-->
<!--Do not touch here-->

<?php
//connect to the database needed
$connect = mysqli_connect('localhost', 'root', "", 'usell');

//Select all columns from the table in the database
$getprd = "SELECT * FROM products";

//Query the command to select all columns
$confirmprd = mysqli_query($connect, $getprd);

//Create arrays to store all the rows of each column
$arrayproducts = [];
$ptype = [];
$prname = [];
$pdprice = [];
$neg = [];
$prdesc = [];
$number = [];
$city = [];
$state = [];


//Storing all the rows of each column into the arrays
while($row = mysqli_fetch_array($confirmprd)){
	$arrayproducts[] = $row['Product'];
	$ptype[] = $row['Prdtype'];
	$prname[] = $row['PDname'];
	$pdprice[] = $row['PDprice'];
	$neg[] = $row['Negotiable'];
	$prdesc[] = $row['Description'];
	$number[] = $row['Pnumber'];
	$city[] = $row['City'];
	$state[] = $row['State']; 
}

?>
<!--End of PHP code-->

<script>


	//Change the php array to js array
	var products = <?php echo json_encode($arrayproducts); ?>;
	var prdtype = <?php echo json_encode($ptype); ?>;
	var prname = <?php echo json_encode($prname); ?>;
	var price = <?php echo json_encode($pdprice);?>;
	var negotiable = <?php echo json_encode($neg);?>;
	var desc = <?php echo json_encode($prdesc);?>;
	var phone = <?php echo json_encode($number);?>;
	var city = <?php echo json_encode($city);?>;
	var state = <?php echo json_encode($state);?>;
	var email = "<?php echo $email ?>";

	sessionStorage.setItem("products", JSON.stringify(products));
	sessionStorage.setItem("prdtype", JSON.stringify(prdtype));
	sessionStorage.setItem("prname", JSON.stringify(prname));
	sessionStorage.setItem("price", JSON.stringify(price));
	sessionStorage.setItem("negotiable", JSON.stringify(negotiable));
	sessionStorage.setItem("desc", JSON.stringify(desc));
	sessionStorage.setItem("phone", JSON.stringify(phone));
	sessionStorage.setItem("city", JSON.stringify(city));
	sessionStorage.setItem("state", JSON.stringify(state));
	sessionStorage.setItem("email", email);

	autocomplete(document.getElementById('input'), prname);
	showProducts(document.getElementById('phcat'), "phone");
	showProducts(document.getElementById('jwcat'), "jewel");
	showProducts(document.getElementById('clcat'), "cloth");
	showProducts(document.getElementById('shcat'), "shoe");

	var productsNo = products.length;

</script> 


</body>
</html>
<?php

}else{
	header("Location: Login.php");
	exit();
}
?>