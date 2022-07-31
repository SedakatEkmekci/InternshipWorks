<!DOCTYPE html>
<?php 
	include "baglantipdo.php";
//session_start();
if ($_SESSION['email']==""){
echo '<script>window.location.href ="index.php";</script>';
}
	?>
<body>
<br><br>

  <div class="container">
	  <div class="row justify-content-center">
		<div class="table-responsive-md">
		 <table class="table table-md background-color=#ddd table-striped table-hover">
			<tr>
			 <td>No</td>
			 <td>Ad</td>
			 <td>Tarih</td>
			 <td>Göster</td>
			</tr>

      <?php 
         $say=0;
         $projesor=$conn->prepare("SELECT * FROM mesajlar");
         $projesor->execute();
         while ($projecek=$projesor->fetch(PDO::FETCH_ASSOC)) { $say++?>


        <tr>
            <td><?php echo $say; ?></td>
            <td><?php echo $projecek['Ad']; ?></td>
           <td><?php echo $projecek['Tarih']; ?></td>
         	<td>
         		       	<form action="mesajgoster.php" method="POST">

              <input type="hidden" name="mesaj_id" value="<?php echo $projecek['No']; ?>">

              <button type="submit" name="goster" class="btn btn-warning btn-sm btn-icon-split">

                <span class="icon text-white-60">

                  <i class="">Göster</i>
 </span>
 </button>
</form></td>
	</tr>
 <?php } ?>

 
</table>
</div>
</div>
</div>
		
</body>