<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
	background-color: #8cb9d2;
}
</style>
<script type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="login.js"></script>
	<title>Redirecting...</title>
</head>
<body>
	
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {   // post metoduyla verileri alıyoruz.
    
    $email 	= $_POST['email'];
    $parola = $_POST['parola'];

    sqlBaglanti($email,$parola);
}
function sqlBaglanti($email,$parola){
	
include("../baglanti.php");

$girilenParola = $parola;

$sql = "SELECT * FROM kullanicilar WHERE Email = '$email'";
$yap = $conn->query($sql);

 
    while($result = $yap->fetch_assoc()) {

        $VTparola = $result["Parola"];	//veritabanından parolamızı aldık
    }

parolaKontrol($VTparola,$girilenParola);

$conn->close();
}

function parolaKontrol($VTparola,$girilenParola){

$encrypt_method = 'AES-256-CBC'; //sifreleme yontemi
$secret_key = '11*_33'; //sifreleme anahtari
$secret_iv = '22-=**_'; //gerekli sifreleme baslama vektoru
$key = hash('sha256', $secret_key); //anahtar hast fonksiyonu ile sha256 algoritmasi ile sifreleniyor
$iv = substr(hash('sha256', $secret_iv), 0, 16); 

$girilenParolaSifrelendi = openssl_encrypt($girilenParola,$encrypt_method, $key, false, $iv);
$VTparolaSifrelendi = openssl_encrypt($VTparola,$encrypt_method, $key, false, $iv);

if (!empty($GLOBALS['parola']) && ($girilenParolaSifrelendi == $VTparolaSifrelendi)) {
	$_SESSION['email']=$GLOBALS['email'];
	
	//echo "<script type='text/javascript'>window.top.location='loggedin.php';</script>";

	echo "<br>";
	
	echo "<script type='text/javascript'>setTimeout(girisBasarili);</script>";
	echo "<script type='text/javascript'>setTimeout(yonlendir, 2500);</script>";
	}
	else{
		echo "<script type='text/javascript'>girisBasarisiz();</script>";
		echo "<script type='text/javascript'>setTimeout(logineyonlendir, 3000);</script>";
}
}
?>
</body>
</html>