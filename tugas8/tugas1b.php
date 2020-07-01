<?php
	
	function tampilPerulangan($jumlahPerulangan)
	{
		
		for ($perulangan=1; $perulangan <= $jumlahPerulangan; $perulangan++) { 
			echo "\nini adalah perulangan ke ".$perulangan;
		}
	}

	$jumlahPerulangan = 5;
	tampilPerulangan($jumlahPerulangan);


?>