<?php
session_start();

include 'connect.php';



if (isset($_POST['loginEmail']) && isset($_POST['loginPassword'])) {
	function validate($data){
		$data= trim($data);
		$data = stripslashes($data);
		$data= htmlspecialchars($data);

		return $data;
	}
	$loginEmail = validate($_POST['loginEmail']);
	$loginPassword = validate($_POST['loginPassword']);

	if (empty($loginEmail)){
		header("Location: Login.php?error=Email is required");
		exit();
	}else if(empty($loginPassword)) {
		header("Location: Login.php?error=Password is required");
		exit();
	}else{
		$info = "SELECT * FROM users WHERE Email = '$loginEmail' ";
		$SQLpass = mysqli_query($connect, $info);
		echo $loginEmail;

		if (mysqli_num_rows($SQLpass) === 1) {
		$row = mysqli_fetch_assoc($SQLpass);

			if($row['Password'] === $loginPassword){
				echo "Logged in!";
				$_SESSION['Email'] = $row['Email'];
				header("Location: products.php?message=Welcome");
				exit();
			}else{
				header("Location: Login.php?error=Incorrect Email or Password");
				exit();	
			}

		}else{
			header("Location: Login.php?error=Incorrect Email or Password");
			exit();	
	}
}
}
?>