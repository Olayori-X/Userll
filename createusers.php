<?php
include 'connect.php';
//The “db_contact” is our database name that we created before.
//After connection database you need to take post variable from the form. See the below code
$txtfirstName = $_POST['firNme'];
$txtlastName = $_POST['lasNme'];
$txtPhone = $_POST['phnNo'];
$txtEmail = $_POST['email'];
$txtCountry = $_POST['country'];
$txtState = $_POST['state'];
$txtCity = $_POST['city'];
$txtPassword = $_POST['passcode'];
//$txtUsername = $_POST['USN_inputs'];

$EmailVerification = "SELECT Email FROM users WHERE Email = '$txtEmail'";
$EmailQuery = mysqli_query($connect, $EmailVerification);

if($EmailQuery -> num_rows > 0){
	while($row = $EmailQuery->fetch_assoc()) {
		echo $row['Email'];
		if($row['Email'] === $txtEmail){

			header("Location: Signup.php?emessage=This Email exists");

		}else {
			$sql = "INSERT INTO users (First Name, LastName, Telephone, Email, Country, State, City, Password) VALUES ('$txtfirstName', '$txtlastName', '$txtPhone', '$txtEmail', '$txtCountry', '$txtState', '$txtCity', '$txtPassword')";

			// insert in database 
			$rs = mysqli_query($connect, $sql);

			if($rs){
				echo "Contact Records Inserted";
				//header("Location: ./LogIn_Page.php");
				//exit();
			}
		}
	}
}else{
	$sql = "INSERT INTO users (FirstName, LastName, Telephone, Email, Country, State, City, Password) VALUES ('$txtfirstName', '$txtlastName', '$txtPhone', '$txtEmail', '$txtCountry', '$txtState', '$txtCity', '$txtPassword')";

	// insert in database 
	$rs = mysqli_query($connect, $sql);

	if($rs){
		echo "Contact Records Inserted";
		//header("Location: ./LogIn_Page.php");
		//exit();
	}
}
?>

