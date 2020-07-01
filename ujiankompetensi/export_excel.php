<?php
//membuat export excel dengan header bawaan yang disediakan oleh php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Daftar Nilai Mahasiswa.xls");
require 'function.php';
$nilai = query("SELECT * FROM makul");


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Halaman Daftar Nilai!</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row p-5">
  		 <table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama Matakuliah</th>
		      <th scope="col">Nilai</th>
		      <th scope="col">Grade</th>
		      <th scope="col">Bobot Grade</th>
		      <th scope="col">SKS</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		$nomer = 1;
		  		$total_nilai=0;
		  		$total_nilai_mutu=0;
		  		$total_sks=0;

		  	 ?>
		  	<?php foreach ($nilai as $nil) : ?>
		    <tr>
		      <th scope="row"><?= $nomer; ?></th>
		      <td><?= $nil['makul'] ?></td>
		      <td><?= $nil['nilai'] ?></td>
		      <td><?php echo hitung_grade($nil['nilai']); ?></td>
		      <td><?php echo hitung_bobot_grace($nil['nilai']); ?></td>
		      <td><?= $nil['sks'] ?></td>
		    </tr>
		    <?php 
		    	$nomer++; 
		    	$nilai_mutu = hitung_bobot_grace($nil['nilai'])*$nil['sks']; 
		       		
		    	$total_nilai += hitung_bobot_grace($nil['nilai']);
		    	$total_sks += $nil['sks'];
		    	$total_nilai_mutu += $nilai_mutu;

		    	?>
			<?php endforeach; ?>
		    <tr>
		      <td colspan="5">IPK</td>
		      <td class="text-center">
		      	<?php 
		      	 $ipk = $total_nilai_mutu/$total_sks;
		      	 echo number_format($ipk,2);
		       	?>
		       	
		       </td>
		    </tr>
		  </tbody>
		</table>
  		</div>
  	</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>