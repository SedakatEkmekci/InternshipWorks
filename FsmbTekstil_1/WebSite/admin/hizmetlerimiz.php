<!DOCTYPE html>
<?php
  include 'adminheader.php';
session_start();
if ($_SESSION['email']==""){
echo '<script>window.location.href ="index.php";</script>';
}
?>
<html>
<head>
<title>Hizmetlerimiz - Admin</title>
<script src="ckeditor/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
  function girisBasarili() {
      Swal.fire({
      icon: 'success',
      title: 'Başarılı!',
      text: 'Başarıyla Kaydedildi!',
      showConfirmButton: false,
      timer: 1500
})}


    function yonlendir (){
      window.top.location='hizmetlerimiz.php';
    }
  </script>

<style type="text/css">
#marjin{
  border: 1px solid black;
  margin-top: 5%;
  margin-bottom: 5%;
  margin-right: 5%;
  margin-left: 5%;
  background-color: #f05035;
  text-align: center;
  font-size: 25px;
}
</style>
  <title></title>
</head>
<body>

<?php
  include ('../baglanti.php');

$sql = 'SELECT hizmetlerimiz FROM siteicerigi';
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $hizmetlerimiz = $row['hizmetlerimiz'];
    }

$conn->close();

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group" id = "marjin">
    <label for="exampleFormControlTextarea1">Hizmetlerimiz</label>
    <textarea class="ckeditor" id="exampleFormControlTextarea1" rows="15" name="hizmetlerimiztext"><?php echo $hizmetlerimiz;?></textarea>
  </div>
  <div align="center">
  <button type="submit" class="btn btn-primary btn-lg" style="background: black; border: none;">Kaydet</button> 
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   // post metoduyla verileri alıyoruz.
    
    $hizmetlerimiztext = $_POST['hizmetlerimiztext'];

      sqlBaglanti($hizmetlerimiztext);
}

function sqlBaglanti($hizmetlerimiztext)
{
  include ('../baglanti.php');

$sql = "UPDATE siteicerigi SET hizmetlerimiz = '$hizmetlerimiztext' ";
$conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo "<br>";
  echo "<script type='text/javascript'>setTimeout(girisBasarili);</script>";
  echo "<script type='text/javascript'>setTimeout(yonlendir, 1000);</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}


?>

</body>

</html>   