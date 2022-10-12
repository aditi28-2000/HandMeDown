<?php
session_start();
include "data_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function authenticate($info){
       $info = trim($info);
	   $info = stripslashes($info);
	   $info = htmlspecialchars($info);
	   return $info;
	}

	$username = authenticate($_POST['username']);
	$password = authenticate($_POST['password']);

	if (empty($username)) {
		header("Location: index.php?error=Please enter your username ");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Please enter your password");
	    exit();
	}else{
		// hashing the password
        $password = md5($password);


		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

		$data = mysqli_query($connection, $sql);

		if (mysqli_num_rows($data) === 1) {
			$row_user = mysqli_fetch_assoc($data);
            if ($row_user['username'] === $username && $row_user['password'] === $password) {
            	$_SESSION['username'] = $row_user['username'];
            	$_SESSION['name'] = $row_user['name'];
            	$_SESSION['id'] = $row_user['id'];
              $_SESSION['caseid'] = $row_user['caseid'];
            	header("Location: home_user.php");
		        exit();
            }else{
				header("Location: index.php?error=Invalid Credentials");
		        exit();
			}
		}else{
			header("Location: index.php?error=Invalid Credentials");
	        exit();
		}
	}

}else{
	header("Location: index.php");
	exit();
}
