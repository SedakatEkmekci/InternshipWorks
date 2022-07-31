<!DOCTYPE html>
<?php 
	include "baglantipdo.php";
  include 'adminheader.php';
session_start();
if ($_SESSION['email']==""){
echo '<script>window.location.href ="index.php";</script>';
}
	?>

<html lang="en">
<head>

  

    <title>Mesajlar - Admin</title>

  
</head>
<body>

<br><br>

	<div class="container">
	<div class="row">
      <div class="col">
        <div class="well well-sm">
          <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <fieldset>    
          	<?php 

      	$Id=$_POST['mesaj_id'];
         $say=0;
         $projesor=$conn->prepare("SELECT * FROM mesajlar WHERE NO='$Id'");
         $projesor->execute();
         while ($projecek=$projesor->fetch(PDO::FETCH_ASSOC)) { $say++?>


            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name" >İsim </label>
              <div class="col-md-9">
                <input disabled="true" id="isim" name="isim" type="text" class="form-control" value="<?php echo $projecek['Ad']; ?>">

             </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input disabled="true" id="email" name="email" type="text"  class="form-control" value="<?php echo $projecek['Mail']; ?>" >
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Mesajınız </label>
              <div class="col-md-9">
               

                  <textarea disabled="true" class="form-control" rows="10"><?php echo $projecek['Mesaj']; ?> </textarea>

              </div>
            </div>
    

        

    <?php } ?>

 </fieldset>
</form>
		

</script>
</body>