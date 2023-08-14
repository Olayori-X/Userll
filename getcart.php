<?php

session_start();

if(isset($_SESSION['Email'])){
	$email = $_SESSION['Email'];
}

if(isset($_GET)){
    include 'connect.php';

    $getcart = "SELECT * FROM cart WHERE Email = '$email'";
    $confirmget = mysqli_query($connect, $getcart);

    if($confirmget){
        $cartproducts = [];
        $cartptype = [];
        $cartprname = [];
        $cartpdprice = [];
        $cartneg = [];
        $cartprdesc = [];
        $cartnumber = [];
        $cartcity = [];
        $cartstate = [];
        $cartdate = [];

        while($row = mysqli_fetch_array($confirmget)){
            $cartproducts[] = $row["Product"];
            $cartptype[] = $row["Prdtype"];
            $cartprname[] = $row["PDname"];
            $cartpdprice[] = $row["PDprice"];
            $cartneg[] = $row["Negotiable"];
            $cartprdesc[] = $row["Description"];
            $cartnumber[] = $row["Pnumber"];
            $cartcity[] = $row["City"];
            $cartstate[] = $row["State"];
            $cartdate[] = $row["date_added"];
        }

        
    }
}
