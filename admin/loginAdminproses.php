<?php
	include 'connect.php';

	$username = $_POST['username']; 
	$password = $_POST['password'];

	$query = mysqli_query($connect,"select * from admin WHERE nama_admin = '$username' AND password = '$password'");
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

	if ($row['nama_admin'] == $username AND $row['password'] == $password) {
?>
	<script language="javascript">alert("login Admin berhasil");</script>
	<script>document.location.href='pageAdmin.php';</script>
<?php
	}	
	else
	{
?>
	<script language="javascript">alert("username dan password tidak sesuai");</script>
	<script>document.location.href='index.php';</script>
<?php
	}
?>