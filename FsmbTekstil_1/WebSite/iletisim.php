<!doctype html>
<?php 
  include 'kemik.php';
?>
<html lang="en">
  <head>
    <title>İletişim - FSMB Tekstil</title>
     <link rel="stylesheet" type="text/css" href="slider.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      #fontsize {
        font-size: 18px;
      }

    a{ position: relative; -webkit-transform: scale(1); -ms-transform: scale(1); -moz-transform: scale(1); transition: all .3s ease-in; -moz-transition: all .3s ease-in; -webkit-transition: all .3s ease-in; -ms-transition: all .3s ease-in; } 
    a:hover{ z-index:2; -webkit-transform: scale(1.1); -ms-transform: scale(1.1); -moz-transform: scale(1.1); transform: scale(1.1); }

    .marjver{
      margin-left: -27%;

    }
      @media (max-width:800px) { 
  .col {         

  !important;
  margin-left: 50px;     

  } }
     @media (max-width:800px) { 
  .btn {         

  !important;
  margin-left: 27px;     

  } }

    </style>



    <title>Ana Sayfa</title>
  </head>
  <body>
    


<br>
<p style="font-size:25px" align="center">Daha fazla bilgi almak için bizimle iletişime geçin</p>


<br><br>

<div class="container">
  <div class="row">
      <div class="col">
        <div class="well well-sm">
          <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <fieldset>    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name" >İsim <b><font color="red">*</font></b></label>
              <div class="col-md-9">
                <input required="true" id="isim" name="isim" type="text" placeholder="İsminiz" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail <b><font color="red">*</font></b></label>
              <div class="col-md-9">
                <input required="true" id="email" name="email" type="text" placeholder="E-mail adresiniz" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Mesajınız <b><font color="red">*</font></b></label>
              <div class="col-md-9">
                <textarea required="true" class="form-control" id="mesaj" name="mesaj" placeholder="Mesajınızı girin..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-left"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button type="submit" class="btn btn-primary btn-lg" >İletişime Geç!</button>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {   // post metoduyla verileri alıyoruz.
    
    $isim     = $_POST['isim'];
    $email   = $_POST['email'];
    $mesaj = $_POST['mesaj'];

      sqlBaglanti($isim,$email,$mesaj);
}
function sqlBaglanti($isim,$email,$mesaj){
include ('baglanti.php');

$tarih = date('d-m-Y H:i:s');
$sql = "INSERT INTO mesajlar (Ad, Mail, Mesaj, Tarih) VALUES ('$isim', '$email', '$mesaj', '$tarih')";


if ($conn->query($sql)=== TRUE) {
  echo "<br><br>";
  echo "<p align='center' class='marjver'>Mesajınız Başarıyla Gönderildi!</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

?>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
      <div class="col"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d398.2522635573547!2d35.2724510990289!3d37.00936435384316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152889feda4fecbb%3A0xe6fc3022fa0cbfde!2sEvant%20Teknoloji!5e0!3m2!1str!2str!4v1627817638129!5m2!1str!2str" width="auto" height="425" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
  </div>
</div>


<?php
include("footer.php");
?>

  </body>
</html>

