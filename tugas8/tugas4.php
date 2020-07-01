<?php

	$InputProgram = 1;
	function luasSegitiga($tinggi, $alas)
	{
		return $luas = 0.5 * $alas * $tinggi;
	}
	function luasPersegi($sisi)
	{
		return $luas = $sisi * $sisi;
	}

	$output = luasSegitiga(5,10);
	echo $output;
	echo "<br>";

	$hitung = luasPersegi(8);
	echo($hitung);

?>