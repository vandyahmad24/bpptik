<?php
//variabel conn digunakan untuk membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","assesmentbpptik");

//function query digunakan untuk mendapatkan data dari database dan di kembalikan dalam bentu array
// paramter masukkannya berupa string untuk melakukan query contoh "SELECT * FROM makul"
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
	return $rows;
}

//hitung grade digunakan untuk mengkonversi nilai menjadi A B C D input paramter yang dimasukan berupa integer nilai
function hitung_grade($nilai)
{
	if ($nilai>85 && $nilai <100) {
		$nilai = 'A';
		return $nilai;
	} else if($nilai>75 && $nilai<=85){
		$nilai='B';
		return $nilai;
	} else if($nilai>65 && $nilai<=75){
		$nilai='C';
		return $nilai;
	} else if($nilai>55 && $nilai<=65){
		$nilai='D';
		return $nilai;
	} else if($nilai<=55){
		$nilai='E';
		return $nilai;
	}else{
		$nilai = 'input nilai salah';
		return $nilai;
	}
}

//hitung grade digunakan untuk mengkonversi nilai menjadi 4 3 2 1 input paramter yang dimasukan berupa integer nilai
function hitung_bobot_grace($nilai)
{
	if ($nilai>85 && $nilai <100) {
		$nilai = 4;
		return $nilai;
	} else if($nilai>75 && $nilai<=85){
		$nilai=3;
		return $nilai;
	} else if($nilai>65 && $nilai<=75){
		$nilai=2;
		return $nilai;
	} else if($nilai>55 && $nilai<=65){
		$nilai=1;
		return $nilai;
	} else if($nilai<=55){
		$nilai=0;
		return $nilai;
	}else{
		$nilai = 0;
		return $nilai;
	}
}

?>