
<?php
include ('kemik.php');

?>

<html lang="en">
  <head>
    <title>Hizmetlerimiz - FSMB Tekstil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="slider.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

@media (max-width:450px) { 
  .hizmetlerimiz img {         

  !important;
  width: 100%;
  height: auto; 
  } }

.img {
    float: right;
    margin-right: 5%;
    padding:0 0 10px 10px;
}
.hizmetlerimiz{
  margin-left: 13%;
  margin-right: 10%;
}

h3{
  background-color:#f05035;;
  margin-left: 13%;
  margin-right: 14%;
}
p{
  margin-right: 6%;
}
a{ position: relative; -webkit-transform: scale(1); -ms-transform: scale(1); -moz-transform: scale(1); transition: all .3s ease-in; -moz-transition: all .3s ease-in; -webkit-transition: all .3s ease-in; -ms-transition: all .3s ease-in; } 
    a:hover{ z-index:2; -webkit-transform: scale(1.1); -ms-transform: scale(1.1); -moz-transform: scale(1.1); transform: scale(1.1); }

.footer{
   display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}

</style>
    <title>Ana Sayfa</title>
  </head>
  <body>

<?php
  include ('baglanti.php');

$sql = 'SELECT hizmetlerimiz FROM siteicerigi';
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $hizmetlerimiz = $row['hizmetlerimiz'];
    }

$conn->close();

?>

  <br>
  <h3 align="center">HİZMETLERİMİZ</h3>
  <br>
    <div class = "hizmetlerimiz">

<img class="img" src="img/hizmetlerimiz.jpg" >
<?php echo $hizmetlerimiz;?>
</div>

<?php
include ('footer.php');

?>
  </body>
</html>