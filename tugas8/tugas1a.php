<?php
	
	function hitungLuas($inputAwal, $inputKedua)
	{
		$luas = $inputAwal * $inputKedua;
		return $luas;
	}

	$inputAwal = 10;
	$inputKedua = 20;

	echo "input awal adalah : ".$inputAwal;
	echo "\ninput kedua adalah : ".$inputKedua;
	echo "\nHasil hitung luas adalah ".hitungLuas($inputAwal,$inputKedua);



?>