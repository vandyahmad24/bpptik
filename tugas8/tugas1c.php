<?php
	
	function hitungZakatProfesi($jumlahGaji)
	{
		$hasil = $jumlahGaji * 2.5 / 100;
		return $hasil;
		
	}

	$jumlahGaji = 500000;
	echo "Gaji Anda Sebanyak : Rp.".$jumlahGaji;
	echo "\nAnda Wajib Zakat Sebanyak : Rp.".hitungZakatProfesi($jumlahGaji);


?>