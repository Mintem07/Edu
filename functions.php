<?php
$koneksi = mysqli_connect("localhost","root","","booking");
function registrasi($data){
	global $koneksi;

	$username = strtolower(stripcslashes($data["username"]));
	$password = strtolower(stripcslashes($data["password2"]));
	$password2 = strtolower(stripcslashes($data["password3"]));
    $nama = strtolower(stripcslashes($data["name"]));
    $telp = strtolower(stripcslashes($data["telp"]));
    $alamat = strtolower(stripcslashes($data["alamat"]));
    $ttl = strtolower(stripcslashes($data["ttl"]));




	// cek apakah username ada di database ato blm

	// $result = mysqli_query($koneksi,"SELECT username FROM user WHERE username = '$username'");

	// if(mysqli_fetch_assoc($result)){
	// 	echo "<script>
	// 		alert('Username sudah ada !');
	// 	</script>";
	// 	return false;
	// }



	// cek konfirmasi password

	if($password !== $password2){
		echo "<script>
			alert('Password berbeda');
		</script>";
		return false;
	}
	// enkripsi password
	// $password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan user baru ke database
	mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama,'$username','$telp','$password','$alamat','$ttl')");

	// untuk menghasilkan angka satu jika berhasil dan minus(-) juka gagal
	return mysqli_affected_rows($koneksi); 
}
?>
