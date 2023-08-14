<?php

	if(isset($_POST)){
		$data = file_get_contents("php://input");
		$prdinfo = json_decode($data, true);

		date_default_timezone_set("America/New_York");
		$date = date("Y/m/d");

		echo $date;

		include 'connect.php';

		$cart = "INSERT INTO cart(Email, Product, Prdtype, PDname, PDprice, Negotiable, Description, Pnumber, City, State, date_added) VALUES('$prdinfo[email]', '$prdinfo[productimg]', '$prdinfo[product_type]', '$prdinfo[product_name]', '$prdinfo[price]', '$prdinfo[negotiable]', '$prdinfo[desc]', '$prdinfo[phone]', '$prdinfo[city]', '$prdinfo[state]', '$date')";
		
		$confirmcart = mysqli_query($connect, $cart);

		if($confirmcart){
			echo "Added to cart";
		}
	}
?>