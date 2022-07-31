	function girisBasarili() {
  		Swal.fire({
  		icon: 'success',
  		title: 'Giriş Başarılı!',
  		text: '3 saniye içinde yönlendirileceksiniz.',
  		showConfirmButton: false,
  		timer: 3000
});}

  	function girisBasarisiz(){
		Swal.fire({
  		icon: "error",
  		title: "Giriş Başarısız!",
  		text: "E-Mail Adresiniz veya Şifreniz Yanlış.",
      timer: 3000
});

	}
  	function yonlendir (){
  		window.top.location='loggedin.php';
  	}

    function logineyonlendir (){
      window.top.location='index.php';
    }