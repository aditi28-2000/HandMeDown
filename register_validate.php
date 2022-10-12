<?php
session_start();
include "data_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['caseid']) && isset($_POST['repassword'])) {

	function authenticate($info){
       $info = trim($info);
	   $info = stripslashes($info);
	   $info = htmlspecialchars($info);
	   return $info;
	}

	$username = authenticate($_POST['username']);
	$password = authenticate($_POST['password']);

	$repassword = authenticate($_POST['repassword']);
	$name = authenticate($_POST['name']);
  $caseid = authenticate($_POST['caseid']);

  $user_info = 'username='. $username. '&name='. $name;


	if (empty($username)) {
		header("Location: register.php?error=Please enter your username&$user_info");
	    exit();
	}else if(empty($password)){
        header("Location: register.php?error=Please enter your password&$user_info");
	    exit();
	}
	else if(empty($repassword)){
        header("Location: register.php?error=Please enter your password again&$user_info");
	    exit();
	}

	else if(empty($name)){
        header("Location: register.php?error=Please enter your name&$user_info");
	    exit();
	}

  else if(empty($caseid)){
        header("Location: register.php?error=Please enter your CaseID&$user_info");
	    exit();
	}

	else if($password !== $repassword){
        header("Location: register.php?error=Passwords do not match&$user_info");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE username='$username' ";
		$data = mysqli_query($connection, $sql);

		if (mysqli_num_rows($data) > 0) {
			header("Location: register.php?error=Username already exist&$user_info");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, password, name, caseid) VALUES('$username', '$password', '$name','$caseid')";
           $data2 = mysqli_query($connection, $sql2);
           if ($data2) {
           	 header("Location: register.php?success=Registered sucessfully");
	         exit();
           }else {
	           	header("Location: register.php?error=Something went wrong&$user_info");
		        exit();
           }
		}
	}

}else{
	header("Location: register.php");
	exit();
}
?>
