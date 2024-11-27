<?php
	require 'konek.php';
	$username = $_POST["username"];
	$password = $_POST["password"];

	$query_sql = "SELECT * FROM user where username='$username' and password='$password'";

	$result = mysqli_query($conn, $query_sql);

	if(mysqli_num_rows($result)>0){
		header("location: index.html");
	}else{
		echo "<center> <h1>Username atau password salah. silahkan coba login kembali.</h1><button><strong> <a href='login.html'>LOGIN</a></strong></button></center>";
	}

?>