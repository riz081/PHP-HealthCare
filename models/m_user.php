<?php

// Koneksi DAtabase
$conn = mysqli_connect("localhost", "root", "", "health_care");


// Function

function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}

		return $rows;
	}


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));

	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	// cek user
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>alert('Username telah tersedia!')</script>";
		return false;
	}

	// Check password
	if ( $password !== $password2) {
		echo "
			<script>
				alert('Password tidak sesuai!')
			</script>
		";

		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	// insert data user
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}

?>