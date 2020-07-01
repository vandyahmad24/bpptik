<?php
	function hitungInt($input)
	{
		if($input <= 0){
			return "harus bilangan postifi";
		}
		else if ($input > 10){
			return "Angka Sudah sampai 10";
		}else{
			return hitungInt($input+1);
		}
	}

	$input = 1;
	echo hitungInt($input);

?>