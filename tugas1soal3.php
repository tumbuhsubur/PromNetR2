<?php
	//Nama Eka Januard Firdaus
	//NIM  19510006
	//Prodi Sistem Informasi 2019 
	//Universitas Gajayana Malang
	//PromnetR2
	//Tugas 1 Soal 1;
	//Memanggil fungsi rekursif
	function fungsi_1 (){
		echo "Hallo.. nama saya Eka";
	}
	function fungsi_2 (){
		echo "Saya adalah mahasiswa Prodi Sistem Informasi angkatan 2019";
	}
	function fungsi_3 (){
		echo "Saya mencoba memanggil fungsi di dalam fungsi";
	}
	//testing dengan iput perulangan - not working jika fungsi urutan di jalankan
	//$ulang = 10;
	function urutan (int $ulang, int $indeks = 1) {
		echo "Teks ini muncul sebelum memanggil diri sendiri [{$indeks}] <br>";
	
	//Panggil fungsi selama $indeks <= $ulang
		if ($indeks < $ulang) {
		urutan($ulang, $indeks + 1);
	} else {
		echo "<br/>";
		echo "Indeks terakhir";
		echo "<br/>";
		echo "<br/>";
	}
	
	echo "Teks ini menampilkan urutan terbalik [{$indeks}]  <br>";
	}

		urutan(5);
		echo "<br/>";

		fungsi_1();
		echo "<br/>";	
		fungsi_2();
		echo "<br/>";
		fungsi_3();
		echo "<br/>";
?>