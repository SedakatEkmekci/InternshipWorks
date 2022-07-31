<!DOCTYPE html>
<?php
	session_start();
	include 'adminheader.php';
	include 'mesajlar.php';
?>
<html>
<head>

	<title>Ana Sayfa - Admin</title>
</head>
<body>

<?php
if ($_SESSION['email']==""){
echo '<script>window.location.href ="index.php";</script>';
}
?>


</body>

</html> 	