<?php
	//Nama Eka Januard Firdaus
	//NIM  19510006
	//Prodi Sistem Informasi 2019 
	//Universitas Gajayana Malang
	//PromnetR2
	//Tugas 1 Soal 1;
	//Memanggil fungsi berulang
	function fungsi_1 (){
		echo "Hallo.. nama saya Eka";
	}
	function fungsi_2 (){
		echo "Saya adalah mahasiswa Prodi Sistem Informasi angkatan 2019";
	}
	function fungsi_3 (){
		echo "Saya sangat tertarik mempelajari Teknik Informatika";
	}

	$ulang = 10;
		for ($x = 1; $x <= $ulang; $x++) {
		echo "<br/>";
		echo fungsi_1(); 
		echo "<br/>";
		echo fungsi_2();
		echo "<br/>";
		echo fungsi_3();
		echo "<br/>";
	}
?>