<?php
session_start();

if(isset($_SESSION['Email'])){

?>
<DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "uploadPrdstyle.css">
	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

	<p>Why don't you check out what others have in store for you? You may just find what you want. <a href = "products.php">Go to Store</a></p>

<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
</script>

<script>
	var desc = document.getElementById("desc").value;
</script>

	<div id = "form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit = "conclude()">
			<p><input type = "file" accept="image/*" name = "image" id="file" onchange = "loadFile(event);" style= "display:none;"></p>
			<p><label for = "file" style = "cursor: pointer;">Upload Image</label></p>
			<p><img id= "output" width = "200" /></p>

			<input type = "radio" id = "jewelries" name = "ptype" value = "Jewelries"><label for = "jewelries"> Jewelries</label>
			<input type = "radio" id = "phones" name = "ptype" value = "Phones"><label for = "phones">Phones</label><br>
			<input type = "radio" id = "clothes" name = "ptype" value = "Clothes"><label for = "clothes">Clothes</label>
			<input type = "radio" id = "shoes" name = "ptype" value = "Shoes"><label for = "shoes">Shoes</label><br>
			<input type = "radio" id = "services" name = "ptype" value = "Services"><label for = "services">Services</label>
			<input type = "radio" id = "others" name = "ptype" value = "Others"><label for = "others">Others</label><br><br>

			<label>Product Name</label><br>
			<input type = "text" id= "pdname" name = "pdname"><br><br>

			<label>Product Price</label><br>
			<input type = "text" id = "price" name = "price"><br><br>

			<input type = "radio" id = "negotiable" name = "negotiate" value = "Negotiable"><label for = "negotiable">Negotiable</label><br>
			<input type = "radio" id = "not_negotiable" name = "negotiate" value = "Not negotiable"><label for = "not_negotiable">Not negotiable</label><br><br>

			<label>Write Description</label><br>
			<textarea id= "desc" name = "desc" placeholder = "Please give a detailed description of the product you are selling, enumerating every quality possessed by your product"></textarea><br><br>

			<label>Phone Number(WhatsApp)</label><br>
			<select id = "country" onchange = "country_code()">
				<option value = "Select Country">Select Country</option>
				<option value = "Nigeria">Nigeria</option>
			</select>

			<input type = "tel" id = "phoneNo" name = "phoneNo"><br><br>

			<label>City</label><br>
			<input type = "text" id = "city" name = "city"><br><br>

			<label>State</label><br>
			<input type = "text" id = "state" name = "state"><br><br>

			<button type= "submit">Add</button>
		</form>
	</div>

	<?php
	include 'connect.php';

	if (isset($_POST['image']) && isset($_POST['ptype']) && isset($_POST['pdname']) && isset($_POST['price']) && isset($_POST['negotiate']) && isset($_POST['desc']) && isset($_POST['phoneNo']) && isset($_POST['city']) && isset($_POST['state'])) {
		$image = $_POST['image'];
		$ptype = $_POST['ptype'];
		$pdname = $_POST['pdname'];
		$price = $_POST['price'];
		$neg = $_POST['negotiate'];
		$desc = $_POST['desc'];
		$phoneNo = $_POST['phoneNo'];
		$city = $_POST['city'];
		$state = $_POST['state'];

		if(empty($image)){
			echo "Please, you are going to add an image so that your buyer can get to see your products";
		}
		elseif (empty($ptype)){
			echo "Fill out all fields";
		}
		elseif (empty($pdname)){
			echo "Please Input the name of your Products";
		}
		elseif(empty($price)){
			echo "It is advisable to add the price of your products";
		}
		elseif(empty($neg)){
			echo "Please, fill out the necessary field";
		}
		elseif(empty($desc)){
			echo "Please, add description so that your buyer can have a detailed explanation of what you are selling";
		}
		elseif(empty($phoneNo)){
			echo "Your buyers need to get to you";
		}
		elseif(empty($city)){
			echo "Please, fill in your City";
		}
		elseif(empty($state)){
			echo "Please, fill in your State";
		}
		else {
			$sell = "INSERT INTO products (Product, Prdtype, PDname, PDprice, Negotiable, Description, Pnumber, City, State) VALUES ('$image','$ptype','$pdname', '$price', '$neg', '$desc', '$phoneNo', '$city', '$state')";
			$confirm = mysqli_query($connect, $sell);

			if($confirm){
				$post = "Posted! We will inform you as soon as you get a buyer.";
			}
		}

	}
	?>

	<script>
		function conclude() {
			var get = "<?php echo $post;?>";
			alert(get);
		}

	</script>

	<script>
		function country_code(){
			var val = document.getElementById("country").value;

			if (val === "Select Country"){
				document.getElementById("phoneNo").value = "";
			}
			else if(val === "Nigeria"){
				document.getElementById("phoneNo").value = "+234";
			}else{
				alert("Hello");
			}
		} 
	</script>


</body>
</html>
<?php

}else{
	header("Location: Login.php");
	exit();
}
?>