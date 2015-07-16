<?php
	
if(isset($_POST['userSubmit'])) {
		$user_username = " ";
		$user_password =" ";
		if(empty($_POST['username']) || empty($_POST['password'])) {
		echo"Input login information<br>";
		$flaglogin = FALSE;
			}
			else {
			$flaglogin = TRUE;
			
	if($flaglogin) {
	$user_username = mysqli_real_escape_string($dbh, trim($_POST['username']));
	$user_password = mysqli_real_escape_string($dbh, trim($_POST['password']));		
	$sql = "SELECT * FROM user WHERE username = '$user_username' AND password = '$user_password' ";
	$result = mysqli_query($dbh, $sql) or die ("User Doesn't Exists");
	}
	if(mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_array($result);
	
	$username = $row['username'];
	
	$_SESSION['uname'] = $username;
	
	header('Refresh: 2;url=index.php');
	echo"Thank you for logging in ".$_SESSION['uname'].", you will be redirected to the homepage";
	}
	else {
		header('Refresh: 2;url=config2.php');
	echo"User doesn't exist or password is incorrect.";
	}
}

}






?>