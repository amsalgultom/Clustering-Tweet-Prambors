<html>
<body> 
	<?php
	session_start();
	include 'koneksi.php';
	// menangkap data yang dikirim dari form
	$username = @$_POST['username'];
	$password = @$_POST['password'];
 
	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);

	echo "<h2>Login berhasil!</h2><br>";
	echo "<h3>Username dan Password Anda benar.</h3>";

	?>
	<a href="home.php"><input type="button" name="logout" value="Logout"></a>
</body>
</html>
