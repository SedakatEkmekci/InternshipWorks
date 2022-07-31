<!doctype html>

  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="adminheader.css">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   

  </head>
    <header>
<div class="header" style="background-color: #f05035;">
<h4 align="center"style="font-size: 30px;">Yönetici Paneli</h4>

    </header>
    <nav class="navbar navbar-expand-md  navbar-light bg-light">

  <div class="container">
    
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#menu" aria-expanded="true" >
    <span class="navbar-toggler-icon"></span>
  </button>
 
 <div class="navbar-brand" style="width: 50%;"><!--LOGO İÇERİĞİ GİRMEK-->
    <a href="loggedin.php"><img src="img/logo.png" class="w-50" alt=""></a><!--RESİM AYARI-->
  </div>
  <div class="collapse navbar-collapse " id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active" href="loggedin.php" class="p" style="font-size: 25px">Mesajlar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 25px">
          Düzenle
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="hakkimizda.php" style="font-size: 20px">Hakkımızda</a>
          <a class="dropdown-item" href="hizmetlerimiz.php" style="font-size: 20px">Hizmetlerimiz</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">   
      <input class="btn btn-outline-secondary my-2 my-sm-0" type="button" onclick="window.location.href = 'cikis.php';" value="Çıkış Yap"/>
      <!--<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" >Çıkış Yap</button>-->
    </form>
  </div>
 </div>
</nav>


