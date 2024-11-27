<?php
	require 'konek.php';
	$username = $_POST["username"];
	$password = $_POST["password"];
	$nama_lengkap = $_POST["nama_lengkap"];
	$no_telp = $_POST["no_telp"];

	$query_sql = "INSERT INTO user (username, password, nama_lengkap, no_telp) VALUES ('$username', '$password', '$nama_lengkap', '$no_telp')";

	if(mysqli_query($conn, $query_sql)) {
		header("location: login.html");
	}else{
		echo "Pendaftaran Gagal :".mysqli_error($conn);
	}