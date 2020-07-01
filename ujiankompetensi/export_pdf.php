<?php
require 'function.php';
$nilai = query("SELECT * FROM makul");

//memangil vendor atau library yang ada pada project
require 'vendor/autoload.php';
//mendeklarasikan Dompdf baru
use Dompdf\Dompdf;
$dompdf = new Dompdf();
	//menampung file yang akan keluar di export pdf dengan variabel $html
	$html = '<center><h3>Daftar Nilai Mahasiswa</h3></center><hr/><br/>';
	$html .= '<table class="table table-bordered">
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
		  <tbody>';
	// inisialisasi awal
	$no = 1;
	$total_nilai=0;
	$total_nilai_mutu=0;
	$total_sks=0;
	foreach ($nilai as $nil)
	{
		 $html .= "<tr>
		 <td>".$no."</td>
		 <td>".$nil['makul']."</td>
		 <td>".$nil['nilai']."</td>
		 <td>".hitung_grade($nil['nilai'])."</td>
		 <td>".hitung_bobot_grace($nil['nilai'])."</td>
		 <td>".$nil['sks']."</td>
		 </tr>";
		 $no++;
		 $nilai_mutu = hitung_bobot_grace($nil['nilai'])*$nil['sks']; 	
      	 $total_nilai += hitung_bobot_grace($nil['nilai']);
    	 $total_sks += $nil['sks'];
    	 $total_nilai_mutu += $nilai_mutu;


	}
	$html .= '<tr>
		      <td colspan="5">IPK</td>
		      <td class="text-center">'. number_format($total_nilai_mutu/$total_sks,2).
		      '</td></tr></table>';
//mendeklarasikan bahwa pdf yang akan di buat yaitu load html
$dompdf->loadHtml($html);
//mengatur halaman yang akan digunakan
$dompdf->setPaper('A4', 'potrait');
// merubah format html menjadi format pdf
$dompdf->render();
//mengeluarkan pdf yang dibuat dengan nama nilai_pdf
$dompdf->stream('nilai_mahasiswa.pdf');
?>